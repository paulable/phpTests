<?php
if(isset($_POST['text']))
{
    echo $_POST['text'];
}
else
{
    echo "Empty field";
}