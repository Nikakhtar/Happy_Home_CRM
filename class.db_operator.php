<?php
/**
 *
 */
class DB_Operator
{
  public $tableName;
  public $fieldName;
  public $id;
  public $type;
  public $db;
  private $sqlQuery;
  ///////////////////////
  public function __construct($db)
  {
    $this->db = $db;
    $g = new G();
    $g->loadClass('pmFunctions');
  }
  //////////////////////
  public function get($id, $tableName, $fieldName)
  {
    $this->sqlQuery = "SELECT `".$fieldName."` FROM `".$tableName."` WHERE `Id` = '".$id."'";
    $result = executeQuery($this->sqlQuery, $this->db);
    $result = $result[1][$fieldName];
    return $result;
  }
  /////////////////////
  public function update_customer($id, $fieldName1, $newValue1, $fieldName2, $newValue2, $fieldName3, $newValue3, $fieldName4, $newValue4, $fieldName5, $newValue5, $fieldName6, $newValue6, $fieldName7, $newValue7, $fieldName8, $newValue8, $fieldName9, $newValue9, $fieldName10, $newValue10, $fieldName11, $newValue11, $fieldName12, $newValue12)
  {
    if($newValue9 == NULL){
      $this->sqlQuery = "UPDATE `customer` SET `".$fieldName1."` = '".$newValue1."',`".$fieldName2."` = '".$newValue2."',`".$fieldName3."` = '".$newValue3."',`".$fieldName4."` = '".$newValue4."',`".$fieldName5."` = '".$newValue5."',`".$fieldName6."` = '".$newValue6."',`".$fieldName7."` = '".$newValue7."',`".$fieldName8."` = '".$newValue8."',`".$fieldName9."` = NULL,`".$fieldName10."` = '".$newValue10."',`".$fieldName11."` = '".$newValue11."',`".$fieldName12."` = '".$newValue12."' WHERE `Id` = '".$id."'"; 
    }
    else{
      $this->sqlQuery = "UPDATE `customer` SET `".$fieldName1."` = '".$newValue1."',`".$fieldName2."` = '".$newValue2."',`".$fieldName3."` = '".$newValue3."',`".$fieldName4."` = '".$newValue4."',`".$fieldName5."` = '".$newValue5."',`".$fieldName6."` = '".$newValue6."',`".$fieldName7."` = '".$newValue7."',`".$fieldName8."` = '".$newValue8."',`".$fieldName9."` = '".$newValue9."',`".$fieldName10."` = '".$newValue10."',`".$fieldName11."` = '".$newValue11."',`".$fieldName12."` = '".$newValue12."' WHERE `Id` = '".$id."'";
    }
    executeQuery($this->sqlQuery, $this->db);
  }
  ////////////////////
  public function insert_customer($firstName, $lastName, $phone, $job, $instaId, $ref, $way, $address, $description, $joinDate, $credit)
  {
    if($ref == NULL){
      $this->sqlQuery = "INSERT INTO `customer`(`Id`, `First_Name`, `Last_Name`, `Phone`, `Job`, `Insta_Id`, `Ref`, `Way`, `Address`, `Description`, `Join_Date`, `Credit`) VALUES(NULL, '$firstName','$lastName','$phone','$job','$instaId',NULL,'$way','$address','$description','$joinDate','$credit')";
    }
    else{
     $this->sqlQuery = "INSERT INTO `customer`(`Id`, `First_Name`, `Last_Name`, `Phone`, `Job`, `Insta_Id`, `Ref`, `Way`, `Address`, `Description`, `Join_Date`, `Credit`) VALUES(NULL, '$firstName','$lastName','$phone','$job','$instaId','$ref','$way','$address','$description','$joinDate','$credit')";
    }
//    $this->sqlQuery = "INSERT INTO `customer`(`Id`, `First_Name`, `Last_Name`, `Phone`, `Job`, `Insta_Id`, `Ref`, `Way`, `Address`, `Description`, `Join_Date`, `Credit`) VALUES(NULL, '$firstName','$lastName','$phone','$job','$instaId','$ref','$way','$address','$description','$joinDate','$credit')";
    executeQuery($this->sqlQuery, $this->db);
    $result = executeQuery("SELECT LAST_INSERT_ID()", $this->db);
    return $result[1]['LAST_INSERT_ID()'];
  }
  ///////////////////////
  public function delete_customer($id)
  {
    $this->sqlQuery = "DELETE FROM `reminder` WHERE `C1` = '".$id."'";
    executeQuery($this->sqlQuery, $this->db);
    ////////////////////////
    $this->sqlQuery = "DELETE FROM `bill_form` WHERE `Customer` = '".$id."'";
    executeQuery($this->sqlQuery, $this->db);
    $this->sqlQuery = "DELETE FROM `customer` WHERE `Id` = '".$id."'";
    executeQuery($this->sqlQuery, $this->db);
  }
  //////////////////////
  public function insert_customer_item($items)
  {
    if (is_array($items)) {
      foreach ($items as $row) {
        $firstName = $row['customer_item_First_Name'];
        $lastName = $row['customer_item_Last_Name'];
        $phone = $row['customer_item_Phone'];
        $job = $row['customer_item_Job'];
        $instaId = $row['customer_item_Insta_Id'];
        $ref = $row['customer_item_Ref'];
        $way = $row['customer_item_Way'];
        $address = $row['customer_item_Address'];
        $description = $row['customer_item_Description'];
        $joinDate = $row['customer_item_Join_Date'];
        $credit = $row['customer_item_Credit'];
        $this->sqlQuery = "INSERT INTO `customer`(`Id`, `First_Name`, `Last_Name`, `Phone`, `Job`, `Insta_Id`, `Ref`, `Way`, `Address`, `Description`, `Join_Date`, `Credit`) VALUES (NULL, '$firstName', '$lastName', '$phone', '$job', '$instaId', '$ref', '$way', '$address', '$description', '$joinDate', '$credit')";
      }
    }
  }
  //////////////////////
  public function update_customer_item($items)
  {
    if (is_array($items)) {
      foreach ($items as $row) {
        $id = $row['customer_item_Id'];
        $firstName = $row['customer_item_First_Name'];
        $lastName = $row['customer_item_Last_Name'];
        $phone = $row['customer_item_Phone'];
        $job = $row['customer_item_Job'];
        $instaId = $row['customer_item_Insta_Id'];
        $ref = $row['customer_item_Ref'];
        $way = $row['customer_item_Way'];
        $address = $row['customer_item_Address'];
        $description = $row['customer_item_Description'];
        //$joinDate = $row['customer_item_Join_Date'];
        $credit = $row['customer_item_Credit'];

        if($ref == NULL){
          $this->sqlQuery = "UPDATE `customer` SET `First_Name` = '".$firstName."', `Last_Name` = '".$lastName."', `Phone` = '".$phone."', `Job` = '".$job."', `Insta_Id` = '".$instaId."', `Ref` = NULL, `Way` = '".$way."', `Address` = '".$address."', `Description` = '".$description."', `Credit` = '".$credit."' WHERE `Id` = '".$id."'";
        }
        else{
          $this->sqlQuery = "UPDATE `customer` SET `First_Name` = '".$firstName."', `Last_Name` = '".$lastName."', `Phone` = '".$phone."', `Job` = '".$job."', `Insta_Id` = '".$instaId."', `Ref` = '".$ref."', `Way` = '".$way."', `Address` = '".$address."', `Description` = '".$description."', `Credit` = '".$credit."' WHERE `Id` = '".$id."'";
        }
        executeQuery($this->sqlQuery, $this->db);
      }
    }
  }
  //////////////////////
  public function insert_bill_form($customer, $createDate, $totalPrice)
  {
    $this->sqlQuery = "INSERT INTO `bill_form`(`Id`, `Customer`, `Create_Date`, `Total_Price`) VALUES(NULL, '$customer', '$createDate', '$totalPrice')";
    executeQuery($this->sqlQuery, $this->db);
    $result = executeQuery("SELECT LAST_INSERT_ID()", $this->db);
    return $result[1]['LAST_INSERT_ID()'];
  }
  /////////////////////
  public function insert_bills($items)
  {
    if (is_array($items)) {
      foreach ($items as $row) {
        $customer = $row['bills_Customer'];
        $createDate = $row['bills_Create_Date'];
        $totalPrice = $row['bills_Total_Price'];
        $this->sqlQuery = "INSERT INTO `bill_form`(`Id`, `Customer`, `Create_Date`, `Total_Price`) VALUES(NULL, '$customer', '$createDate', '$totalPrice')";
        executeQuery($this->sqlQuery, $this->db);
      }
    }
  }
  ///////////////////////
  public function delete_bill_form($id)
  {
    $this->sqlQuery = "DELETE FROM `bill_form` WHERE `Id` = '".$id."'";
    executeQuery($this->sqlQuery, $this->db);
  }
  //////////////////////
  public function insert_reminder($c1, $type, $title, $year, $month, $day, $phone)
  {
    if($phone == NULL){
      $this->sqlQuery = "INSERT INTO `reminder`(`Id`, `C1`, `Type`, `Title`, `Year`, `Month`, `Day`, `Phone`) VALUES(NULL, '$c1', '$type', '$title', '$year', '$month', '$day', NULL)";
    }
    else{
      $this->sqlQuery = "INSERT INTO `reminder`(`Id`, `C1`, `Type`, `Title`, `Year`, `Month`, `Day`, `Phone`) VALUES(NULL, '$c1', '$type' ,'$title', '$year', '$month', '$day', '$phone')";
    }
    executeQuery($this->sqlQuery, $this->db);
    $result = executeQuery("SELECT LAST_INSERT_ID()", $this->db);
    return $result[1]['LAST_INSERT_ID()'];
  }
  ///////////////////////
  public function delete_reminder($id)
  {
    $this->sqlQuery = "DELETE FROM `reminder` WHERE `Id` = '".$id."'";
    executeQuery($this->sqlQuery, $this->db);
  }
  //////////////////////
  public function insert_reminder_item($items, $c1 = NULL)
  {
    if (is_array($items)) {
      if($c1 == NULL){$x = 1;}
      foreach ($items as $row) {
        if($x == 1){
          $c1 = $row['Customer_reminder_c1'];
        }
        $type = $row['Customer_reminder_type'];
        $title = $row['Customer_reminder_title'];
        $year = $row['Customer_reminder_year'];
        $month = $row['Customer_reminder_month'];
        $day = $row['Customer_reminder_day'];
        $phone = $row['Customer_reminder_phone'];
        $this->sqlQuery = "INSERT INTO `reminder`(`Id`, `C1`, `Type`, `Title`, `Year`, `Month`, `Day`, `Phone`) VALUES(NULL, '$c1', '$type', '$title', '$year', '$month', '$day', '$phone')";
        executeQuery($this->sqlQuery, $this->db);
      }
    }
  }
  //////////////////////
  public function get_reminders($where = '', $lable1 = NULL, $lable2 = NULL, $lable3 = NULL, $lable4 = NULL, $lable5 = NULL, $lable6 = NULL, $lable7 = NULL, $lable8 = NULL)
  {
    $this->sqlQuery = "SELECT `reminder`.`Id` AS '".$lable1."', `reminder`.`C1` AS '".$lable2."', `reminder`.`Type` AS '".$lable3."', `reminder`.`Title` AS '".$lable4."', `reminder`.`Year` AS '".$lable5."', `reminder`.`Month` AS '".$lable6."', `reminder`.`Day` AS '".$lable7."', `reminder`.`Phone` AS '".$lable8."' FROM `reminder` ".$where."ORDER BY reminder.C1";
    $this->item = executeQuery($this->sqlQuery, $this->db);
    return $this->item;
  }
  /////////////////////
  public function get_reminder_item_by_c1($c1 = NULL, $lable1 = NULL, $lable2 = NULL, $lable3 = NULL, $lable4 = NULL, $lable5 = NULL, $lable6 = NULL, $lable7 = NULL, $lable8 = NULL)
  {
    $this->sqlQuery = "SELECT `reminder`.`Id` AS '".$lable1."', `reminder`.`C1` AS '".$lable2."', `reminder`.`Type` AS '".$lable3."', `reminder`.`Title` AS '".$lable4."', `reminder`.`Year` AS '".$lable5."', `reminder`.`Month` AS '".$lable6."', `reminder`.`Day` AS '".$lable7."', `reminder`.`Phone` AS '".$lable8."' FROM `reminder` WHERE `reminder`.`C1` = '".$c1."'";
    $this->item = executeQuery($this->sqlQuery, $this->db);
    return $this->item;
  }
  //////////////////////
  public function get_reminder_item_by_type($type = NULL, $lable1 = NULL, $lable2 = NULL, $lable3 = NULL, $lable4 = NULL, $lable5 = NULL, $lable6 = NULL, $lable7 = NULL, $lable8 = NULL)
  {
    $this->sqlQuery = "SELECT `reminder`.`Id` AS '".$lable1."', `reminder`.`C1` AS '".$lable2."', `reminder`.`Type` AS '".$lable3."', `reminder`.`Title` AS '".$lable4."', `reminder`.`Year` AS '".$lable5."', `reminder`.`Month` AS '".$lable6."', `reminder`.`Day` AS '".$lable7."', `reminder`.`Phone` AS '".$lable8."' FROM `reminder` WHERE `reminder`.`Type` = '".$type."'";
    $this->item = executeQuery($this->sqlQuery, $this->db);
    return $this->item;
  }
  //////////////////////
  /*public function get_reminder_item_by_date_range($maxYear = NULL, $maxMonth = NULL, $maxDay = NULL, $minYear = NULL, $minMonth = NULL, $minDay = NULL, $lable1 = NULL, $lable2 = NULL, $lable3 = NULL, $lable4 = NULL, $lable5 = NULL, $lable6 = NULL, $lable7 = NULL, $lable8 = NULL)
  {
  $this->sqlQuery = "SELECT `reminder`.`Id` AS '".$lable1."', `reminder`.`C1` AS '".$lable2."', `reminder`.`Type` AS '".$lable3."', `reminder`.`Title` AS '".$lable4."', `reminder`.`Year` AS '".$lable5."', `reminder`.`Month` AS '".$lable6."', `reminder`.`Day` AS '".$lable7."', `reminder`.`Phone` AS '".$lable8."' FROM `reminder` WHERE `reminder`.`Year` >= '".$minYear."' AND `reminder`.`Month` >= '".$minMonth."' AND `reminder`.`Day` >= '".$minDay."', `reminder`.`Year` <= '".$maxYear."' AND `reminder`.`Month` <= '".$maxMonth."' AND `reminder`.`Day` <= '".$maxDay."')";
    $this->item = executeQuery($this->sqlQuery, $this->db);
    return $this->item;
  }*/
  /////////////////////
  public function get_reminder_item_by_phone($phone = NULL, $lable1 = NULL, $lable2 = NULL, $lable3 = NULL, $lable4 = NULL, $lable5 = NULL, $lable6 = NULL, $lable7 = NULL, $lable8 = NULL)
  {
    $this->sqlQuery = "SELECT `reminder`.`Id` AS '".$lable1."', `reminder`.`C1` AS '".$lable2."', `reminder`.`Type` AS '".$lable3."', `reminder`.`Title` AS '".$lable4."', `reminder`.`Year` AS '".$lable5."', `reminder`.`Month` AS '".$lable6."', `reminder`.`Day` AS '".$lable7."', `reminder`.`Phone` AS '".$lable8."' FROM `reminder` WHERE `reminder`.`Phone` = '".$phone."'";
    $this->item = executeQuery($this->sqlQuery, $this->db);
    return $this->item;
  }
  //////////////////////
  public function get_customer_item($where = '', $lable1 = NULL, $lable2 = NULL, $lable3 = NULL, $lable4 = NULL, $lable5 = NULL, $lable6 = NULL, $lable7 = NULL, $lable8 = NULL, $lable9 = NULL, $lable10 = NULL, $lable11 = NULL, $lable12 = NULL)
  {
    $this->sqlQuery = "SELECT `customer`.`Id` AS '".$lable1."', `customer`.`First_Name` AS '".$lable2."', `customer`.`Last_Name` AS '".$lable3."', `customer`.`Phone` AS '".$lable4."', `customer`.`Job` AS '".$lable5."', `customer`.`Insta_Id` AS '".$lable6."', `customer`.`Ref` AS '".$lable7."', `customer`.`Way` AS '".$lable8."', `customer`.`Address` AS '".$lable9."', `customer`.`Description` AS '".$lable10."', `customer`.`Join_Date` AS '".$lable11."', `customer`.`Credit` AS '".$lable12."' FROM `customer` ".$where."ORDER BY customer.Id DESC";
    $this->item = executeQuery($this->sqlQuery, $this->db);
    return $this->item;
  }
  /////////////////////
  public function get_bills($where = '', $lable1 = NULL, $lable2 = NULL, $lable3 = NULL, $lable4 = NULL)
  {
    $this->sqlQuery = "SELECT `bill_form`.`Id` AS '".$lable1."', `bill_form`.`Customer` AS '".$lable2."', `bill_form`.`Create_Date` AS '".$lable3."', `bill_form`.`Total_Price` AS '".$lable4."' FROM `bill_form` INNER JOIN customer ON customer.Id = bill_form.Customer ".$where."ORDER BY bill_form.Create_Date DESC";
    $this->item = executeQuery($this->sqlQuery, $this->db);
    return $this->item;
  }
  /////////////////////
}
 ?>
