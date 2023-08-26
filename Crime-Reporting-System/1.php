 $reg="insert into user values('$u_name','$u_id','$u_pass','$u_addr','$a_no','$gen','$mob')";
        mysqli_select_db($con,"crime_portal");
        $res=mysqli_query($con,$reg);
        if(!$res)
        {
        $message1 = "User Already Exist";
        echo "<script type='text/javascript'>alert('$message1');</script>";
    }
            else
    {
        $message = "User Registered Successfully";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    }
}
?>