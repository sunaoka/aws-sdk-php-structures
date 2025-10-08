<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\GetCampaignStateBatch;

trait GetCampaignStateBatchTrait
{
    /**
     * @param GetCampaignStateBatchRequest $args
     * @return GetCampaignStateBatchResponse
     */
    public function getCampaignStateBatch(GetCampaignStateBatchRequest $args)
    {
        $result = parent::getCampaignStateBatch($args->toArray());
        return new GetCampaignStateBatchResponse($result->toArray());
    }
}
