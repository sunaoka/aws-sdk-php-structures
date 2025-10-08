<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\DeregisterInstance;

trait DeregisterInstanceTrait
{
    /**
     * @param DeregisterInstanceRequest $args
     * @return DeregisterInstanceResponse
     */
    public function deregisterInstance(DeregisterInstanceRequest $args)
    {
        $result = parent::deregisterInstance($args->toArray());
        return new DeregisterInstanceResponse($result->toArray());
    }
}
