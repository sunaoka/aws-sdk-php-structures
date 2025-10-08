<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateSubnetChangeProtection;

trait UpdateSubnetChangeProtectionTrait
{
    /**
     * @param UpdateSubnetChangeProtectionRequest $args
     * @return UpdateSubnetChangeProtectionResponse
     */
    public function updateSubnetChangeProtection(UpdateSubnetChangeProtectionRequest $args)
    {
        $result = parent::updateSubnetChangeProtection($args->toArray());
        return new UpdateSubnetChangeProtectionResponse($result->toArray());
    }
}
