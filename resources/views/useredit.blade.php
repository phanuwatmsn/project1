<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>สมาชิกระบบ</title>
  </head>
  <body>
    สมาชิกระบบ<br>
    <form class="" action="../../user/{{$userobj->id}}" method="post">
      <input type="text" name="name" value="{{$userobj->name}}">
      <input type="text" name="email" value="{{$userobj->email}}">
      <button type="submit" name="button">แก้ไขข้อมูล</button>
      <input type="hidden" name="_method" value="PUT">
      {{ csrf_field() }}
    </form>
  </body>
</html>
