<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\GetCampaignStateBatch;

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
