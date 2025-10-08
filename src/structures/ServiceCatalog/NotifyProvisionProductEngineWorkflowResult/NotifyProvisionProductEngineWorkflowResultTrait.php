<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\NotifyProvisionProductEngineWorkflowResult;

trait NotifyProvisionProductEngineWorkflowResultTrait
{
    /**
     * @param NotifyProvisionProductEngineWorkflowResultRequest $args
     * @return NotifyProvisionProductEngineWorkflowResultResponse
     */
    public function notifyProvisionProductEngineWorkflowResult(
        NotifyProvisionProductEngineWorkflowResultRequest $args,
    ) {
        $result = parent::notifyProvisionProductEngineWorkflowResult($args->toArray());
        return new NotifyProvisionProductEngineWorkflowResultResponse($result->toArray());
    }
}
