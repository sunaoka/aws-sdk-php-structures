<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\DeleteCampaignAsset;

trait DeleteCampaignAssetTrait
{
    /**
     * @param DeleteCampaignAssetRequest $args
     * @return void
     */
    public function deleteCampaignAsset(DeleteCampaignAssetRequest $args)
    {
        parent::deleteCampaignAsset($args->toArray());
    }
}
