<?php

namespace Sunaoka\Aws\Structures\Appstream\StopFleet;

trait StopFleetTrait
{
    /**
     * @param StopFleetRequest $args
     * @return StopFleetResponse
     */
    public function stopFleet(StopFleetRequest $args)
    {
        $result = parent::stopFleet($args->toArray());
        return new StopFleetResponse($result->toArray());
    }
}
