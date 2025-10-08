<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableImageDeprecation;

trait DisableImageDeprecationTrait
{
    /**
     * @param DisableImageDeprecationRequest $args
     * @return DisableImageDeprecationResponse
     */
    public function disableImageDeprecation(DisableImageDeprecationRequest $args)
    {
        $result = parent::disableImageDeprecation($args->toArray());
        return new DisableImageDeprecationResponse($result->toArray());
    }
}
