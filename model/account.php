<?php
        function insert_account($email, $user, $pass){
            $sql = "INSERT INTO account(email, user, password) values('$email', '$user', '$pass')";
            pdo_execute($sql);
        }
        function checkuser($user, $pass){
            $sql = "SELECT * FROM account WHERE user='".$user."' AND pass='".$pass."'";
            $sp = pdo_query_one($sql);
            return $sp;
        }
        function checkemail($email){
            $sql = "SELECT * FROM account WHERE email='".$email."'";
            $sp = pdo_query_one($sql);
            return $sp;
        }
    
