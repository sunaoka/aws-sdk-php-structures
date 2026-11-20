<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\StartCampaignAssetActivationTask;

trait StartCampaignAssetActivationTaskTrait
{
    /**
     * @param StartCampaignAssetActivationTaskRequest $args
     * @return StartCampaignAssetActivationTaskResponse
     */
    public function startCampaignAssetActivationTask(StartCampaignAssetActivationTaskRequest $args)
    {
        $result = parent::startCampaignAssetActivationTask($args->toArray());
        return new StartCampaignAssetActivationTaskResponse($result->toArray());
    }
}
