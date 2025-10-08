<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\CreateResourceSet;

trait CreateResourceSetTrait
{
    /**
     * @param CreateResourceSetRequest $args
     * @return CreateResourceSetResponse
     */
    public function createResourceSet(CreateResourceSetRequest $args)
    {
        $result = parent::createResourceSet($args->toArray());
        return new CreateResourceSetResponse($result->toArray());
    }
}
