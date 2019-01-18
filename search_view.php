search_view.php

<form method="post" action="<?php echo site_url('search_controller/search_user');?>">
<input type='text' name='searchstr' placeholder="search by name"/>
<input type="submit" name="search" value="Search"/>
</form>
Search_controller.php
<?php
class Search_controller extends CI_controller
{
public function search()
{
$this->load->view('search_view');
}
public function search_user()
{
extract($_POST);
$this->load->model('search_model');
$this->search_model->user_search($searchstr);

}
}
?>

Search_model.php
<?php
class Search_model extends CI_model
{
public function user_search($str)
{
$this->db->select('uname');
$this->db->like('uname',$str,'after');
$resultset=$this->db->get('ms_users_tbl');
$recs=$resultset->result();
foreach($recs as $row)
{
echo $row->uname;
echo "<br/>";
}
} 
}
?>