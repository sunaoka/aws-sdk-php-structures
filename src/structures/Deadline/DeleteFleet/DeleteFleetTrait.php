<?php

namespace Sunaoka\Aws\Structures\Deadline\DeleteFleet;

trait DeleteFleetTrait
{
    /**
     * @param DeleteFleetRequest $args
     * @return DeleteFleetResponse
     */
    public function deleteFleet(DeleteFleetRequest $args)
    {
        $result = parent::deleteFleet($args->toArray());
        return new DeleteFleetResponse($result->toArray());
    }
}
