<?php      

defined('C5_EXECUTE') or die(_("Access Denied."));

class IntensedebateCommentsPackage extends Package {

	protected $pkgHandle = 'intensedebate_comments';
	protected $appVersionRequired = '5.4.1';
	protected $pkgVersion = '0.3.1';
	
	public function getPackageDescription() {
		return t('Allows users to comment your content with IntenseDebate');
	}
	
	public function getPackageName() {
		return t('Intense Debate Comments');
	}
	
	public function install() 
	{
		$pkg = parent::install();
			
		//install blocks
		BlockType::installBlockTypeFromPackage('intensedebate_comments', $pkg); 
	
	}
}