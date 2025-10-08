<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetFleet;

trait GetFleetTrait
{
    /**
     * @param GetFleetRequest $args
     * @return GetFleetResponse
     */
    public function getFleet(GetFleetRequest $args)
    {
        $result = parent::getFleet($args->toArray());
        return new GetFleetResponse($result->toArray());
    }
}
