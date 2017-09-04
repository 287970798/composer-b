<?php
/**
* Article Model
*/
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	public $timestamps = false;
	
	// public static function first()
	// {
	// 	$connect = mysql_connect('localhost', 'root', 'qing43') or die('Could not connect ' . mysql_error());
	// 	mysql_query("SET NAMES utf8");
	// 	mysql_select_db('cms');
	// 	$result = mysql_query('SELECT * FROM cms_content LIMIT 0,1');

	// 	if ($row = mysql_fetch_assoc($result)) {
	// 		return $row;
	// 	}
	// 	mysql_close();
	// }
}