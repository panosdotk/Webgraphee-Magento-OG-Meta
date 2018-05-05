<?php
class Webgraphee_Ogmeta_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function isOgMetaEnabled()
    {
        return Mage::getStoreConfig("webgraphee_ogmeta/og/enabled");
    }

	public function getOgImage()
    {
        return Mage::getStoreConfig("webgraphee_ogmeta/og/image");
    }

	public function getSiteName()
    {
        return Mage::getStoreConfig("webgraphee_ogmeta/og/sitename");
    }

    public function isProductShortEnabled()
   {
       return Mage::getStoreConfig("webgraphee_ogmeta/og/productdescription");
   }

}
