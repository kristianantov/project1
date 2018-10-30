<?php
/**
 * Created by PhpStorm.
 * User: Kristian
 * Date: 10/21/2018
 * Time: 4:07 PM
 */

?>
<?php $view->extend('base.html.php') ?>



<form action="/" method="post">
<input type="hidden" name="sbm" value="1">
<select class="w300 chosen-select" multiple="multiple" name="aaa[]" style="width:200px;">
    <option value="aaa" <?=($request->get("aaa")[0] == "aaa")?"selected":""?>>January</option>
    <option value="bbb" <?=($request->get("aaa")[1] == "bbb")?"selected":""?>>February</option>
    <option value="vvv">March</option>
    <option value="4">April</option>
    <option value="5">May</option>
    <option value="6">June</option>
    <option value="7">July</option>
    <option value="8">August</option>
    <option value="9">September</option>
    <option value="10">October</option>
    <option value="11">November</option>
    <option value="12">December</option>
</select>

    <input type="submit">

</form>