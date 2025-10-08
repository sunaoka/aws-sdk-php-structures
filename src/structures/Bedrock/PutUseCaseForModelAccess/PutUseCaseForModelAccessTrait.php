<?php

namespace Sunaoka\Aws\Structures\Bedrock\PutUseCaseForModelAccess;

trait PutUseCaseForModelAccessTrait
{
    /**
     * @param PutUseCaseForModelAccessRequest $args
     * @return PutUseCaseForModelAccessResponse
     */
    public function putUseCaseForModelAccess(PutUseCaseForModelAccessRequest $args)
    {
        $result = parent::putUseCaseForModelAccess($args->toArray());
        return new PutUseCaseForModelAccessResponse($result->toArray());
    }
}
