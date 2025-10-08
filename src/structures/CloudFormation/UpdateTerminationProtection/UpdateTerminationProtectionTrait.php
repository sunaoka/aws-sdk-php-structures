<?php

namespace Sunaoka\Aws\Structures\CloudFormation\UpdateTerminationProtection;

trait UpdateTerminationProtectionTrait
{
    /**
     * @param UpdateTerminationProtectionRequest $args
     * @return UpdateTerminationProtectionResponse
     */
    public function updateTerminationProtection(UpdateTerminationProtectionRequest $args)
    {
        $result = parent::updateTerminationProtection($args->toArray());
        return new UpdateTerminationProtectionResponse($result->toArray());
    }
}
