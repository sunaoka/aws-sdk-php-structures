<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateHubContentReference;

trait UpdateHubContentReferenceTrait
{
    /**
     * @param UpdateHubContentReferenceRequest $args
     * @return UpdateHubContentReferenceResponse
     */
    public function updateHubContentReference(UpdateHubContentReferenceRequest $args)
    {
        $result = parent::updateHubContentReference($args->toArray());
        return new UpdateHubContentReferenceResponse($result->toArray());
    }
}
