<?php echo (($this->session->flashdata('success')))?'<div class="container message success popup typecho-radius-topleft typecho-radius-topright typecho-radius-bottomleft typecho-radius-bottomright"><ul><li>' . $this->session->flashdata('success') . '</li></ul></div>':'';?>
<?php echo (($this->session->flashdata('error')))?'<div class="container message notice popup typecho-radius-topleft typecho-radius-topright typecho-radius-bottomleft typecho-radius-bottomright"><ul><li>' . $this->session->flashdata('error') . '</li></ul></div>':'';?>