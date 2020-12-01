<!-- ⓒ OdinBOX, 최영환 -->
<html>
  <!-- ⓒ OdinBOX, 최영환 -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>하이브리드앱개발 : 회원 정보</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="jquery.mobile/jquery.mobile-1.4.5.min.css"/>
	<script src="jquery.mobile/jquery-1.11.1.min.js"></script>
	<script src="jquery.mobile/jquery.mobile-1.4.5.min.js"></script>
	
	<script src="cordova.js"></script>	

  </head>
  <body>
    <?php
      $name = $_POST[ 'name' ];
      if ( is_null( $name ) ) {
        echo '<h1>실패! 다시 한번 확인을 해주세요.</h1>';
      } else {
        $jb_conn = mysqli_connect( 'localhost', 'root', '', 'ulsan' );
        $jb_sql = "DELETE FROM test WHERE name = '$name'";
        mysqli_query( $jb_conn, $jb_sql );
        echo '<h1>정상적으로 삭제되었습니다.</h1>';
      }
    ?>
    <p>
      <a href="index.html">회원 목록 보기</a>
      <a href="delete.html">회원 삭제</a>
     </p>
  </body>
</html>
<!-- ⓒ OdinBOX, 최영환 -->