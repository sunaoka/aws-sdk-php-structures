<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateInvalidation;

trait CreateInvalidationTrait
{
    /**
     * @param CreateInvalidationRequest $args
     * @return CreateInvalidationResponse
     */
    public function createInvalidation(CreateInvalidationRequest $args)
    {
        $result = parent::createInvalidation($args->toArray());
        return new CreateInvalidationResponse($result->toArray());
    }
}
