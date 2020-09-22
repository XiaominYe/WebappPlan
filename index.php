<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>lab3</title>
    </head>
        <style>
        body{background: #efefef;
             margin: 0.8px auto ;
             font-size:40px;
             width:50% ;
            }

    </style>
    <body> 
       
        <?php
        include('Student.php');
        $students = array();

        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home', 'john@doe.com');

        $first->add_email('work', 'jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $first->status='Freshman';
        $students['j123'] = $first;

        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home', 'albert@braniacs.com');
        $second->add_email('work1', 'a_einstein@bcit.ca');
        $second->add_email('work2', 'albert@physics.mit.edu');

        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $second->status='Junior';
        $students['a456'] = $second;

        
        $third = new Student();
        $third->surname = "Ye";
        $third->first_name = "Xiaomin";
        $third->add_email('home', 'XiaominYe@qq.com');
        $third->add_email('work1', 'XiaominYe@bcit.ca');
        $third->add_email('work2', 'XiaominYe@physics.mit.edu');

        $third->add_grade(90);
        $third->add_grade(90);
        $third->add_grade(90);
        $third->status='Senior';
        $students['b678'] = $third;
        
        $fourth = new Student();
        $fourth->surname = "Liu";
        $fourth->first_name = "Tom";
        $fourth->add_email('home', 'TomLiu@qq.com');
        $fourth->add_email('work1', 'TomLiu@bcit.ca');
        $fourth->add_email('work2', 'TomLiu@physics.mit.edu');

        $fourth->add_grade(80);
        $fourth->add_grade(80);
        $fourth->add_grade(80);
        $fourth->status='Senior';
        $students['b688'] = $fourth;
        
        ksort($students);
        foreach ($students as $student)
            echo $student->toString();

        ?>
        </table>
    </body>
</html>
