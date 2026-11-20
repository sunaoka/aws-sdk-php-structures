<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\GetCampaignAssetExportTask;

trait GetCampaignAssetExportTaskTrait
{
    /**
     * @param GetCampaignAssetExportTaskRequest $args
     * @return GetCampaignAssetExportTaskResponse
     */
    public function getCampaignAssetExportTask(GetCampaignAssetExportTaskRequest $args)
    {
        $result = parent::getCampaignAssetExportTask($args->toArray());
        return new GetCampaignAssetExportTaskResponse($result->toArray());
    }
}
