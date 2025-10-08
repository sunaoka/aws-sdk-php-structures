<?php

namespace Sunaoka\Aws\Structures\Emr\AddInstanceFleet;

trait AddInstanceFleetTrait
{
    /**
     * @param AddInstanceFleetRequest $args
     * @return AddInstanceFleetResponse
     */
    public function addInstanceFleet(AddInstanceFleetRequest $args)
    {
        $result = parent::addInstanceFleet($args->toArray());
        return new AddInstanceFleetResponse($result->toArray());
    }
}
