<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateContainerFleet;

trait UpdateContainerFleetTrait
{
    /**
     * @param UpdateContainerFleetRequest $args
     * @return UpdateContainerFleetResponse
     */
    public function updateContainerFleet(UpdateContainerFleetRequest $args)
    {
        $result = parent::updateContainerFleet($args->toArray());
        return new UpdateContainerFleetResponse($result->toArray());
    }
}
