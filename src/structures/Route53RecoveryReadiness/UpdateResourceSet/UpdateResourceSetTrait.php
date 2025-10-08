<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\UpdateResourceSet;

trait UpdateResourceSetTrait
{
    /**
     * @param UpdateResourceSetRequest $args
     * @return UpdateResourceSetResponse
     */
    public function updateResourceSet(UpdateResourceSetRequest $args)
    {
        $result = parent::updateResourceSet($args->toArray());
        return new UpdateResourceSetResponse($result->toArray());
    }
}
