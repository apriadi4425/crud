# crud
simple CRUD OOP PHP

still in process


to call data on index.php

<?php 
  $result = $crud->get('tablename');
?>

or if there is a condition data use

<?php
 $result = $crud->get('tablename','where_condition');
?>

you can define "where_condition" with array, or without array
