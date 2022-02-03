<?php


namespace App\classes;
class Student
{
    protected $text;
    protected $students;
    protected $result=[];

    public function __construct($post=null)
    {
        if (isset($post['search'])){
            $this->text = $post['search'];
        }
    }

    public function getAllStudent()
    {
        return [
            0 => [
                'name' => 'Tapu Rahat',
                'mobile' => '01829900988',
                'email' => '01829900988@gmail.com',
                'adress' => 'Azimpur'
            ],
            1 => [
                'name' => 'Shabnam',
                'mobile' => '01829900911',
                'email' => '01829900988@gmail.com',
                'adress' => 'Azimpur New Paltan'
            ],
            2 => [
                'name' => 'Maruu',
                'mobile' => '01834349397',
                'email' => '01829900988@gmail.com',
                'adress' => 'EMC'
            ],
            3 => [
                'name' => 'Nusu',
                'mobile' => '01580351494',
                'email' => '01829900988@gmail.com',
                'adress' => 'Akot'
            ],
            4 => [
                'name' => 'Tamim',
                'mobile' => '01717064523',
                'email' => '01829900988@gmail.com',
                'adress' => 'Faridpur'
            ],
            5 => [
                'name' => 'Taskin',
                'mobile' => '01723325509',
                'email' => '01829900988@gmail.com',
                'adress' => 'CV'
            ],
        ];
    }

    public function getAllStudentBySearchText()
    {
        $this->students = $this->getAllStudent();
        foreach ($this->students as $student)
        {
            if ($this->text == $student['name'])
            {
                $this->result = $student;
                break;
            }
        }
        return $this->result;
    }

}