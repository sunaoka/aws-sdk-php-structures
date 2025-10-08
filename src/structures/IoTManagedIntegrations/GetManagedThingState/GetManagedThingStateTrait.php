<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetManagedThingState;

trait GetManagedThingStateTrait
{
    /**
     * @param GetManagedThingStateRequest $args
     * @return GetManagedThingStateResponse
     */
    public function getManagedThingState(GetManagedThingStateRequest $args)
    {
        $result = parent::getManagedThingState($args->toArray());
        return new GetManagedThingStateResponse($result->toArray());
    }
}
