# crud
simple CRUD OOP PHP

still in process


to call data on index.php
```php
<?php 
  $result = $crud->get('tablename');
?>
```
or if there is a condition data use
```php
<?php
 $result = $crud->get('tablename','where_condition');
?>
```
you can define "where_condition" with array, or without array

to insert data

```php
<?php
 $result = $crud->insert('tablename','data_array');
?>
```

to update data

```php
<?php
 $result = $crud->update('tablename','data_array','where_condition');
?>
```

for updating data yang can use with array or without array, same as where condition.

to delete data 

```php
<?php
 $result = $crud->delete('tablename','where_condition');
?>
```
