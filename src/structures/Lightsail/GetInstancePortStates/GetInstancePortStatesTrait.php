<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstancePortStates;

trait GetInstancePortStatesTrait
{
    /**
     * @param GetInstancePortStatesRequest $args
     * @return GetInstancePortStatesResponse
     */
    public function getInstancePortStates(GetInstancePortStatesRequest $args)
    {
        $result = parent::getInstancePortStates($args->toArray());
        return new GetInstancePortStatesResponse($result->toArray());
    }
}
