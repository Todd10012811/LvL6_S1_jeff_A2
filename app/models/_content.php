<?php
class _content{
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function title() {
        $this->db->query('SELECT * FROM AppointmentRequest where IDN = 45');
        return $this->db->resultSet();
    }

    public function paragraph() {
        return "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero nisi dolores numquam dolore nam excepturi debitis exercitationem! Provident mollitia placeat architecto ratione exercitationem, suscipit animi nihil eaque laudantium nobis ipsa perspiciatis, ea, maxime eos? Doloremque, enim? Cum nihil ex molestias corporis necessitatibus incidunt sequi, voluptate pariatur. Tempore deserunt vel voluptates amet officia provident nobis aliquid iste quaerat eos magnam cupiditate earum aspernatur consequuntur labore fugit unde consectetur hic impedit nihil harum voluptatum repudiandae, blanditiis saepe? Alias nostrum necessitatibus est optio, harum accusantium nam laborum dicta exercitationem, eum sapiente a dolores dolorum ipsa hic. Sapiente, tempora incidunt ut ea doloremque eveniet!";
    }

}