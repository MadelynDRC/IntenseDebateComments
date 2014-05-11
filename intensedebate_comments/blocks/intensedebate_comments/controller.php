<?php     
defined('C5_EXECUTE') or die(_("Access Denied."));

class IntensedebateCommentsBlockController extends BlockController {

	protected $btName = "Intensedebate Comments";
	protected $btDescription = "Allows users to comment your content with IntenseDebate";
	public $btTable = 'btIntensedebateComments';
	public $btInterfaceWidth = '400';
	public $btInterfaceHeight = '200';
	
	public function getBlockTypeDescription() {
		return $this->btDescription;
	}
	
	public function getBlockTypeName() {
		return t("Intense Debate Comments");
	}
	
	public function __construct($b = null){ 
		parent::__construct($b);
	}
	
	public function on_page_view() {

    }
    
    function save($data) {
		$args['idcomments_acct'] = isset($data['idcomments_acct']) ? trim($data['idcomments_acct']) : '';
		parent::save($args);
	}
}
?>