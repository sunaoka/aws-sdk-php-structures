<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetInvalidation;

trait GetInvalidationTrait
{
    /**
     * @param GetInvalidationRequest $args
     * @return GetInvalidationResponse
     */
    public function getInvalidation(GetInvalidationRequest $args)
    {
        $result = parent::getInvalidation($args->toArray());
        return new GetInvalidationResponse($result->toArray());
    }
}
