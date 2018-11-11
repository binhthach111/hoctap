<?PHP
//lớp thông tin người dùng
class user{
	private $UserId,$UserName,$UserMail,$Userpassword;
	public function getUserId(){
		return $this->UserId;
	}
	public function setUserId($UserId){
		$this->UserId=$UserId;
	}
	public function getUserName(){
		return $this->UserName;
	}
	public function setUserName($UserName){
		$this->UserName=$UserName;
	}
	public function getUserMail(){
		return $this->UserMail;
	}
	public function setUserMail($UserMail){
		$this->UserMail=$UserMail;
	}
	public function getUserPassword(){
		return $this->UserPassword;
	}
	public function setUserPassword($UserPassword){
		$this->Userpassword=$UserPassword;
	}
	//hàm chèn dữ liệu khi đăng kí:
	public function InsertUser(){
		include "conn.php";
		$req=$bdd->prepare("INSERT INTO users(UserName,UserMail,Userpassword) VALUES(:UserName,:UserMail,:UserPassword)");
		$req->execute(array(
		'UserName'=>$this->getUserName(),
		'UserMail'=>$this->getUserMail(),
		'UserPassword'=>$this->getUserPassword()
		));
	}
}
//lớp chat
class chat{
	private $ChatId,$ChatUserId,$ChatText;
	public function getChatId(){
		return $this->ChatId;
	}
	public function setChatId(){
		$this->ChatId = $ChatId;
	}
	public function getChatUserId(){
		return $this->ChatUserId;
	}
	public function setChatUserId(){
		$this->ChatUserId = $ChatUserId;
	}
	public function getChatText(){
		return $this->ChatText;
	}
	public function setChatText(){
		$this->ChatText = $ChatText;
	}
	//hàm chèn tin nhắn văn bản
	public function InsertChatMessage(){
		include"conn.php";
		$req=$bdd->prepare("INSERT INTO chats(ChatUserId,ChatText) VALUES(:ChatUserId,:ChatText)");
		$req->execute(array(
		'ChatUserId'=>$this->getChatUserId(),
		'ChatText'=>$this->getChatText()
		));
	}
}
?>