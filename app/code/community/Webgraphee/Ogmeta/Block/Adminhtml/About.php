<?php

class Webgraphee_Ogmeta_Block_Adminhtml_About
    extends Mage_Adminhtml_Block_Abstract
    implements Varien_Data_Form_Element_Renderer_Interface
{


    public function render(Varien_Data_Form_Element_Abstract $element)
    {
		$logo = "//www.webgraphee.com/logo_modules.png";
        $html = <<<HTML

<div style="background:url('$logo') no-repeat scroll 15px 15px #e7efef; border:1px solid #ccc; min-height:60px; margin:5px 0; padding:15px 15px 15px 140px;">
<p><strong>Open Graph Meta Data Module v0.1.1</strong> by <a href="https://www.webgraphee.com/" target="_blank">Webgraphee</a>
<br /> Add support for the Open Graph Meta Data to your site optimizing how your pages are shared.
</p>For questions or support requests please email us at <a href="mailto:support@webgraphee.com">support@webgraphee.com</a>.</p>
</div>

HTML;
        return $html;
    }
}
