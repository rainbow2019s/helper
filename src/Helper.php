<?php
namespace tanghao2018\helper;

trait helper
{
  /**
   * 验证码字母生成器
   */
  public function generateCode($len = 2)
  {
    $code = random_bytes($len);
    return bin2hex($code);
  }

  /**
   * 验证码数字生成器
   */

  public static function generateNumber($length = 4)
  {
    return rand(pow(10, ($length - 1)), pow(10, $length) - 1);
  }


  /**
   * 控制台输出
   */
  public function stdout($data)
  {
    $stdout = fopen('php://stdout','w');
    fwrite($stdout,json_encode($data)."\n");
    fclose($stdout);
  }



}