<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateHubContentReference;

trait CreateHubContentReferenceTrait
{
    /**
     * @param CreateHubContentReferenceRequest $args
     * @return CreateHubContentReferenceResponse
     */
    public function createHubContentReference(CreateHubContentReferenceRequest $args)
    {
        $result = parent::createHubContentReference($args->toArray());
        return new CreateHubContentReferenceResponse($result->toArray());
    }
}
