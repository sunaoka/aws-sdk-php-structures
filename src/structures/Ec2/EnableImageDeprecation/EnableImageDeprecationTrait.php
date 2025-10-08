<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableImageDeprecation;

trait EnableImageDeprecationTrait
{
    /**
     * @param EnableImageDeprecationRequest $args
     * @return EnableImageDeprecationResponse
     */
    public function enableImageDeprecation(EnableImageDeprecationRequest $args)
    {
        $result = parent::enableImageDeprecation($args->toArray());
        return new EnableImageDeprecationResponse($result->toArray());
    }
}
