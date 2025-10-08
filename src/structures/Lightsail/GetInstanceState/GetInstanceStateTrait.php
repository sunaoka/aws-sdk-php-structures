<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstanceState;

trait GetInstanceStateTrait
{
    /**
     * @param GetInstanceStateRequest $args
     * @return GetInstanceStateResponse
     */
    public function getInstanceState(GetInstanceStateRequest $args)
    {
        $result = parent::getInstanceState($args->toArray());
        return new GetInstanceStateResponse($result->toArray());
    }
}
