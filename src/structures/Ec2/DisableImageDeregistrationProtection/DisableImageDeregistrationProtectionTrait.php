<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableImageDeregistrationProtection;

trait DisableImageDeregistrationProtectionTrait
{
    /**
     * @param DisableImageDeregistrationProtectionRequest $args
     * @return DisableImageDeregistrationProtectionResponse
     */
    public function disableImageDeregistrationProtection(DisableImageDeregistrationProtectionRequest $args)
    {
        $result = parent::disableImageDeregistrationProtection($args->toArray());
        return new DisableImageDeregistrationProtectionResponse($result->toArray());
    }
}
