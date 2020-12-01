<!-- ⓒ OdinBOX, 최영환 -->
<html>
  <!-- ⓒ OdinBOX, 최영환 -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>하이브리드앱개발 : 회원 정보</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <script src="jquery-1.12.4.min.js"></script>
  </head>
  <body>
    <?php
      $name = $_POST[ 'name' ];
      $city = $_POST[ 'city' ];
      if ( is_null( $name ) ) {
        echo '<h1>실패! 다시 한번 확인을 해주세요.</h1>';
      } else {
        $jb_conn = mysqli_connect( 'localhost', 'root', '', 'ulsan' );
        $jb_sql = "UPDATE test SET city='$city' WHERE name = '$name'";
        mysqli_query( $jb_conn, $jb_sql );
        echo '<h1>정상적으로 수정되었습니다.</h1>';
      }
    ?>
    <p>
      <a href="index.html">회원 목록 보기</a>
      <a href="update.html">회원 수정</a>
     </p>
  </body>
  <!-- ⓒ OdinBOX, 최영환 -->
</html>
<!-- ⓒ OdinBOX, 최영환 -->