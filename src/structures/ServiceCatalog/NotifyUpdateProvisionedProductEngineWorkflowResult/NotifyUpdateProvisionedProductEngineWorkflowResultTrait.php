<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\NotifyUpdateProvisionedProductEngineWorkflowResult;

trait NotifyUpdateProvisionedProductEngineWorkflowResultTrait
{
    /**
     * @param NotifyUpdateProvisionedProductEngineWorkflowResultRequest $args
     * @return NotifyUpdateProvisionedProductEngineWorkflowResultResponse
     */
    public function notifyUpdateProvisionedProductEngineWorkflowResult(NotifyUpdateProvisionedProductEngineWorkflowResultRequest $args)
    {
        $result = parent::notifyUpdateProvisionedProductEngineWorkflowResult($args->toArray());
        return new NotifyUpdateProvisionedProductEngineWorkflowResultResponse($result->toArray());
    }
}
