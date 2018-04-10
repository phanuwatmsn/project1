<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>แสดงข้อมูลผู้ใช้ทั้งหมด</title>
  </head>
  <body>
    <a href="{{url('user/create')}}">เพิ่มผู้ใช้</a><br>
    แสดงข้อมูลผู้ใช้ทั้งหมด<br>
    <table>
      <tr>
        <th>ชื่อผู้ใช้</th>
        <th>อีเมล์</th>
      </tr>
      <tr>
        <td>หฟดฟหกด</td>
        <td>ฟหกดฟหกด</td>
      </tr>
    </table>
    <?php
    foreach ($users as $user) {
      echo $user->name.'<a href="'.url('user/'.$user->id.'/edit').'">แก้ไข</a>'.'<br>';
    ?>
      <form action="{{url('user/'.$user->id)}}" method="POST">
      <input type="hidden" name="_method" value="DELETE">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <button type="submit" name="button">DELETE</button>
    </form>
    <?php } ?>
  </body>
</html>
