<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateContainerFleet;

trait CreateContainerFleetTrait
{
    /**
     * @param CreateContainerFleetRequest $args
     * @return CreateContainerFleetResponse
     */
    public function createContainerFleet(CreateContainerFleetRequest $args)
    {
        $result = parent::createContainerFleet($args->toArray());
        return new CreateContainerFleetResponse($result->toArray());
    }
}
