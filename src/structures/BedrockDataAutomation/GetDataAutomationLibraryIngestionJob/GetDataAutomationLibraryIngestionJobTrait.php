<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\GetDataAutomationLibraryIngestionJob;

trait GetDataAutomationLibraryIngestionJobTrait
{
    /**
     * @param GetDataAutomationLibraryIngestionJobRequest $args
     * @return GetDataAutomationLibraryIngestionJobResponse
     */
    public function getDataAutomationLibraryIngestionJob(GetDataAutomationLibraryIngestionJobRequest $args)
    {
        $result = parent::getDataAutomationLibraryIngestionJob($args->toArray());
        return new GetDataAutomationLibraryIngestionJobResponse($result->toArray());
    }
}
