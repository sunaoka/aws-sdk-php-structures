<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\GetCampaignAsset;

trait GetCampaignAssetTrait
{
    /**
     * @param GetCampaignAssetRequest $args
     * @return GetCampaignAssetResponse
     */
    public function getCampaignAsset(GetCampaignAssetRequest $args)
    {
        $result = parent::getCampaignAsset($args->toArray());
        return new GetCampaignAssetResponse($result->toArray());
    }
}
