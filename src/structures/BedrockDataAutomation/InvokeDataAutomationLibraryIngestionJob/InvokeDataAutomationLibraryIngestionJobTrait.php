<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\InvokeDataAutomationLibraryIngestionJob;

trait InvokeDataAutomationLibraryIngestionJobTrait
{
    /**
     * @param InvokeDataAutomationLibraryIngestionJobRequest $args
     * @return InvokeDataAutomationLibraryIngestionJobResponse
     */
    public function invokeDataAutomationLibraryIngestionJob(InvokeDataAutomationLibraryIngestionJobRequest $args)
    {
        $result = parent::invokeDataAutomationLibraryIngestionJob($args->toArray());
        return new InvokeDataAutomationLibraryIngestionJobResponse($result->toArray());
    }
}
