<?php if ($this->session->has_userdata('success')) { ?>
<div class="alert alert-info alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <i class="icon fa fa-check"></i><?=$this->session->flashdata('success');?>
</div>
<?php  } ?>

<?php if ($this->session->has_userdata('error')) { ?>
<div class="alert alert-info alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <i class="icon fa fa-ban"></i> <?=strip_tags(str_replace('</p>', '', $this->session->flashdata('error')));?>
</div>
<?php  } ?>