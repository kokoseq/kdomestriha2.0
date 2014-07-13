<?php
class UrlHelper 
{
	
	public static function imageUrl($image)
	{
		return Yii::app()->request->baseUrl . '/css/img/' . $image;
	}	
	
	public static function webImageUrl($image)
	{
		return Yii::app()->request->baseUrl . '/images/web/' . $image;
	}
	
	public static function baseUrl()
	{
		return Yii::app()->request->baseUrl;
	}
	
}