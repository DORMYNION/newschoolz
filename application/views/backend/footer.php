<!-- Footer -->
<footer class="main">
	&copy; 2018 <strong> <?php echo $this->db->get_where('settings' , array('type'=>'system_name'))->row()->description; ?> </strong>
    | Developed by
	<a href="http://newtinz.com"
    	target="_blank">Debdbdbd</a>
</footer>
