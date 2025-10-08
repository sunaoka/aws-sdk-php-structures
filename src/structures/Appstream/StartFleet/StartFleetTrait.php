<?php

namespace Sunaoka\Aws\Structures\Appstream\StartFleet;

trait StartFleetTrait
{
    /**
     * @param StartFleetRequest $args
     * @return StartFleetResponse
     */
    public function startFleet(StartFleetRequest $args)
    {
        $result = parent::startFleet($args->toArray());
        return new StartFleetResponse($result->toArray());
    }
}
