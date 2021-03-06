
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('Student.php');

        $students = array();
        
        //Creating the first student
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        
        //Creating the second student
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;
        
        //Creating the third student
        $third = new Student();
        $third->surname = "Shame";
        $third->first_name = "Jackson";
        $third->add_email('home','shane@braniacs.com');
        $third->add_email('work1','a_einstein@bcit.ca');
        $third->add_email('work2','shame@physics.mit.edu');
        $third->add_grade(95);
        $third->add_grade(80);
        $third->add_grade(50);
        $students['b457'] = $third;
        
        //sorting the students
        ksort($students);
        
        //Printing each student with the tostring method
        foreach($students as $student)
            echo $student->toString();

        ?>
    </body>
</html>
