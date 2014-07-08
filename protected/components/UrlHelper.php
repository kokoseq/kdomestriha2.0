<?php
class UrlHelper 
{
	
	public static function imageUrl($url)
	{
		return Yii::app()->request->baseUrl . '/css/img/' . $url;
	}	
	
}