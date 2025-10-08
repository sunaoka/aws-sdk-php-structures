<?php

namespace Sunaoka\Aws\Structures\Appstream\AssociateFleet;

trait AssociateFleetTrait
{
    /**
     * @param AssociateFleetRequest $args
     * @return AssociateFleetResponse
     */
    public function associateFleet(AssociateFleetRequest $args)
    {
        $result = parent::associateFleet($args->toArray());
        return new AssociateFleetResponse($result->toArray());
    }
}
