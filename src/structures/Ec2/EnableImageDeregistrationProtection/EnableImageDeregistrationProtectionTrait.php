<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableImageDeregistrationProtection;

trait EnableImageDeregistrationProtectionTrait
{
    /**
     * @param EnableImageDeregistrationProtectionRequest $args
     * @return EnableImageDeregistrationProtectionResponse
     */
    public function enableImageDeregistrationProtection(EnableImageDeregistrationProtectionRequest $args)
    {
        $result = parent::enableImageDeregistrationProtection($args->toArray());
        return new EnableImageDeregistrationProtectionResponse($result->toArray());
    }
}
