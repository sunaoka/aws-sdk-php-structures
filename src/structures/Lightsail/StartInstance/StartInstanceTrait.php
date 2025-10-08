<?php

namespace Sunaoka\Aws\Structures\Lightsail\StartInstance;

trait StartInstanceTrait
{
    /**
     * @param StartInstanceRequest $args
     * @return StartInstanceResponse
     */
    public function startInstance(StartInstanceRequest $args)
    {
        $result = parent::startInstance($args->toArray());
        return new StartInstanceResponse($result->toArray());
    }
}
