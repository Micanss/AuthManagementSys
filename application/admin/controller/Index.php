<?php
namespace app\admin\controller;

/**
 * 首页控制器
 */
use app\admin\controller\Common;
use think\Db;
class Index extends Common
{
	public $scopes;
	public function index()
	{
		// $this->withoutGlobalScopes([1,2,4]);
		
		$a = function(){
			return "hello world";
		};
		echo $a();
	}
	// public function withoutGlobalScopes(array $scopes = null)
	// {
	// 	 if (is_array($scopes)) {
	// 	 foreach ($scopes as $scope) {
	// 	 $this->withoutGlobalScope($scope);
	// 	 }
	// 	 } else {
	// 	 $this->scopes = [];
	// 	 }
	// 	 return $this;
	// }
}
