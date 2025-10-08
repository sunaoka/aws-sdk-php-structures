<?php

namespace Sunaoka\Aws\Structures\GameLift\DeleteFleet;

trait DeleteFleetTrait
{
    /**
     * @param DeleteFleetRequest $args
     * @return void
     */
    public function deleteFleet(DeleteFleetRequest $args)
    {
        parent::deleteFleet($args->toArray());
    }
}
