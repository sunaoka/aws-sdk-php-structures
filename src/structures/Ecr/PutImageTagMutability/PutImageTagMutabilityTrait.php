<?php

namespace Sunaoka\Aws\Structures\Ecr\PutImageTagMutability;

trait PutImageTagMutabilityTrait
{
    /**
     * @param PutImageTagMutabilityRequest $args
     * @return PutImageTagMutabilityResponse
     */
    public function putImageTagMutability(PutImageTagMutabilityRequest $args)
    {
        $result = parent::putImageTagMutability($args->toArray());
        return new PutImageTagMutabilityResponse($result->toArray());
    }
}
