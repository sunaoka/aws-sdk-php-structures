<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DeregisterType;

trait DeregisterTypeTrait
{
    /**
     * @param DeregisterTypeRequest $args
     * @return DeregisterTypeResponse
     */
    public function deregisterType(DeregisterTypeRequest $args)
    {
        $result = parent::deregisterType($args->toArray());
        return new DeregisterTypeResponse($result->toArray());
    }
}
