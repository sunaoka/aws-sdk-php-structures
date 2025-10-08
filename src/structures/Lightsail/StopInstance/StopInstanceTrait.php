<?php

namespace Sunaoka\Aws\Structures\Lightsail\StopInstance;

trait StopInstanceTrait
{
    /**
     * @param StopInstanceRequest $args
     * @return StopInstanceResponse
     */
    public function stopInstance(StopInstanceRequest $args)
    {
        $result = parent::stopInstance($args->toArray());
        return new StopInstanceResponse($result->toArray());
    }
}
