<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomationRuntime\GetDataAutomationStatus;

trait GetDataAutomationStatusTrait
{
    /**
     * @param GetDataAutomationStatusRequest $args
     * @return GetDataAutomationStatusResponse
     */
    public function getDataAutomationStatus(GetDataAutomationStatusRequest $args)
    {
        $result = parent::getDataAutomationStatus($args->toArray());
        return new GetDataAutomationStatusResponse($result->toArray());
    }
}
