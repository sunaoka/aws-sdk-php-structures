<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\StartCampaignAssetExportTask;

trait StartCampaignAssetExportTaskTrait
{
    /**
     * @param StartCampaignAssetExportTaskRequest $args
     * @return StartCampaignAssetExportTaskResponse
     */
    public function startCampaignAssetExportTask(StartCampaignAssetExportTaskRequest $args)
    {
        $result = parent::startCampaignAssetExportTask($args->toArray());
        return new StartCampaignAssetExportTaskResponse($result->toArray());
    }
}
