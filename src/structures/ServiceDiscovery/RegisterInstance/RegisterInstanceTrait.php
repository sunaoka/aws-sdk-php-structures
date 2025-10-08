<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\RegisterInstance;

trait RegisterInstanceTrait
{
    /**
     * @param RegisterInstanceRequest $args
     * @return RegisterInstanceResponse
     */
    public function registerInstance(RegisterInstanceRequest $args)
    {
        $result = parent::registerInstance($args->toArray());
        return new RegisterInstanceResponse($result->toArray());
    }
}
