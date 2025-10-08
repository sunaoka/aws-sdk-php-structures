<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\GetResourceSet;

trait GetResourceSetTrait
{
    /**
     * @param GetResourceSetRequest $args
     * @return GetResourceSetResponse
     */
    public function getResourceSet(GetResourceSetRequest $args)
    {
        $result = parent::getResourceSet($args->toArray());
        return new GetResourceSetResponse($result->toArray());
    }
}
