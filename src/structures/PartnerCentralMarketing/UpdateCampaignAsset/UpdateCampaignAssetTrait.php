<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\UpdateCampaignAsset;

trait UpdateCampaignAssetTrait
{
    /**
     * @param UpdateCampaignAssetRequest $args
     * @return UpdateCampaignAssetResponse
     */
    public function updateCampaignAsset(UpdateCampaignAssetRequest $args)
    {
        $result = parent::updateCampaignAsset($args->toArray());
        return new UpdateCampaignAssetResponse($result->toArray());
    }
}
