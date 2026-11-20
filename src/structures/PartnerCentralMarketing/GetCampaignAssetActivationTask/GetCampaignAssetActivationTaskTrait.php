<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\GetCampaignAssetActivationTask;

trait GetCampaignAssetActivationTaskTrait
{
    /**
     * @param GetCampaignAssetActivationTaskRequest $args
     * @return GetCampaignAssetActivationTaskResponse
     */
    public function getCampaignAssetActivationTask(GetCampaignAssetActivationTaskRequest $args)
    {
        $result = parent::getCampaignAssetActivationTask($args->toArray());
        return new GetCampaignAssetActivationTaskResponse($result->toArray());
    }
}
