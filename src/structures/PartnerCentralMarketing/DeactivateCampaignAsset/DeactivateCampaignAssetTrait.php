<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\DeactivateCampaignAsset;

trait DeactivateCampaignAssetTrait
{
    /**
     * @param DeactivateCampaignAssetRequest $args
     * @return DeactivateCampaignAssetResponse
     */
    public function deactivateCampaignAsset(DeactivateCampaignAssetRequest $args)
    {
        $result = parent::deactivateCampaignAsset($args->toArray());
        return new DeactivateCampaignAssetResponse($result->toArray());
    }
}
