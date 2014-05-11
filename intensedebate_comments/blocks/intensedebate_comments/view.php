<?php       
defined('C5_EXECUTE') or die(_("Access Denied."));

    $c = Page::getCurrentPage();
	$cID = $c->getCollectionID();

	$nh = Loader::helper('navigation');
	$cPath = $nh->getLinkToCollection($c);
?>
	<div style="clear: both; height: 0px;"></div>
		<script>
				var idcomments_acct ='<?php    echo $idcomments_acct; ?>';
				var idcomments_post_id= '<?php    echo $idcomments_acct."-article-".$cID; ?>';
				var idcomments_post_url= '<?php    echo BASE_URL.$cPath; ?>';
		</script>
			
			<span id="IDCommentsPostTitle" style="display:none"></span>
			<script type='text/javascript' src='http://www.intensedebate.com/js/genericCommentWrapperV2.js'></script>
				
	<div style="clear: both; height: 15px;"></div>