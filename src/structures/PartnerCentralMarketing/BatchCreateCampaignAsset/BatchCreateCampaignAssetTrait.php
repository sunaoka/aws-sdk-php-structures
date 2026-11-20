<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\BatchCreateCampaignAsset;

trait BatchCreateCampaignAssetTrait
{
    /**
     * @param BatchCreateCampaignAssetRequest $args
     * @return BatchCreateCampaignAssetResponse
     */
    public function batchCreateCampaignAsset(BatchCreateCampaignAssetRequest $args)
    {
        $result = parent::batchCreateCampaignAsset($args->toArray());
        return new BatchCreateCampaignAssetResponse($result->toArray());
    }
}
