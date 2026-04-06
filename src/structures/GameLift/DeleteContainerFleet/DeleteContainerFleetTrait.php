<?php

namespace Sunaoka\Aws\Structures\GameLift\DeleteContainerFleet;

trait DeleteContainerFleetTrait
{
    /**
     * @param DeleteContainerFleetRequest $args
     * @return DeleteContainerFleetResponse
     */
    public function deleteContainerFleet(DeleteContainerFleetRequest $args)
    {
        $result = parent::deleteContainerFleet($args->toArray());
        return new DeleteContainerFleetResponse($result->toArray());
    }
}
