<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>สมาชิกระบบ</title>
  </head>
  <body>
    สมาชิกระบบ<br>
    <form class="" action="{{url('user')}}" method="post">
      <input type="text" name="name" value="">
      <input type="text" name="email" value="">
      <button type="submit" name="button">เพิ่มผู้ใช้</button>
      {{ csrf_field() }}
    </form>
  </body>
</html>
