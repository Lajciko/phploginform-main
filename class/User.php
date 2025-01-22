<?php
class User
{
    private int $id;
    private string $firstName;
    private string $lastName;
    private string $email;
    private ?string $birthDate;
    private ?string $profilePicture;

    public function __construct(string $email, string $password)
    {
      
        $db = new mysqli("localhost", "root", "", "phploginform");

        $sql = "SELECT * FROM user WHERE email='$email' LIMIT 1";

 
        $result = $db->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();

            if (password_verify($password, $row['password'])) {
                $this->id = $row['id'];
                $this->email = $row['email'];
                $this->firstName = $row['firstname'];
                $this->lastName = $row['lastname'];
                $this->birthDate = $row['birthdate'] ?? null;
                $this->profilePicture = $row['profilepicture'] ?? null;
                $db->close();
            } else {
                die("Błąd konstruktora - niepoprawne hasło");
            }
        } else {
            die("Błąd konstruktora - nie ma takiego użytkownika");
        }
    }

    public function login() {
        return isset($this->id);
    }

    public function registerSession() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['user'] = $this;
    }

    public function getEmail() : string {
        return $this->email;
    }

    public function getFirstName() : string {
        return $this->firstName;
    }

    public function getLastName() : string {
        return $this->lastName;
    }

    public function getBirthDate() : ?string {
        return $this->birthDate;
    }

    public function getProfilePicture() : ?string {
        return $this->profilePicture;
    }

    public static function register(string $email, string $password, string $firstName = "", string $lastName = "", string $birthDate = "", string $profilePicture = "") {

        $db = new mysqli("localhost", "root", "", "phploginform");

        $password = password_hash($password, PASSWORD_ARGON2I);

 
        $sql = "INSERT INTO user (email, password, firstname, lastname, birthdate, profilepicture) 
                VALUES ('$email','$password','$firstName','$lastName','$birthDate','$profilePicture')";


        $db->query($sql);
    }
}
?>