<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetUseCaseForModelAccess;

trait GetUseCaseForModelAccessTrait
{
    /**
     * @param GetUseCaseForModelAccessRequest $args
     * @return GetUseCaseForModelAccessResponse
     */
    public function getUseCaseForModelAccess(GetUseCaseForModelAccessRequest $args)
    {
        $result = parent::getUseCaseForModelAccess($args->toArray());
        return new GetUseCaseForModelAccessResponse($result->toArray());
    }
}
