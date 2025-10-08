<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\NotifyTerminateProvisionedProductEngineWorkflowResult;

trait NotifyTerminateProvisionedProductEngineWorkflowResultTrait
{
    /**
     * @param NotifyTerminateProvisionedProductEngineWorkflowResultRequest $args
     * @return NotifyTerminateProvisionedProductEngineWorkflowResultResponse
     */
    public function notifyTerminateProvisionedProductEngineWorkflowResult(NotifyTerminateProvisionedProductEngineWorkflowResultRequest $args)
    {
        $result = parent::notifyTerminateProvisionedProductEngineWorkflowResult($args->toArray());
        return new NotifyTerminateProvisionedProductEngineWorkflowResultResponse($result->toArray());
    }
}
