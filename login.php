
<?php
//��¼
if(!isset($_POST['submit'])){
    exit('�Ƿ�����!');
}
$username = htmlspecialchars($_POST['username']);
$password = MD5($_POST['password']);

//�������ݿ������ļ�
include('conn.php');
//����û����������Ƿ���ȷ
$check_query = mysql_query("select userid from user_list where username='$username' and password='$password' limit 1");
if($result = mysql_fetch_array($check_query)){
    //��¼�ɹ�
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['userid'] = $result['userid'];
    echo $username,' ��ӭ�㣡���� <a href="my.php">�û�����</a><br />';
    echo '����˴� <a href="login.php?action=logout">ע��</a> ��¼��<br />';
    exit;
} else {
    exit('��¼ʧ�ܣ�����˴� <a href="javascript:history.back(-1);">����</a> ����');
}



//ע����¼
if($_GET['action'] == "logout"){
    unset($_SESSION['userid']);
    unset($_SESSION['username']);
    echo 'ע����¼�ɹ�������˴� <a href="login.html">��¼</a>';
    exit;
}

?>