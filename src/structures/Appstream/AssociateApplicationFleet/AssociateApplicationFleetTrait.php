<?php

namespace Sunaoka\Aws\Structures\Appstream\AssociateApplicationFleet;

trait AssociateApplicationFleetTrait
{
    /**
     * @param AssociateApplicationFleetRequest $args
     * @return AssociateApplicationFleetResponse
     */
    public function associateApplicationFleet(AssociateApplicationFleetRequest $args)
    {
        $result = parent::associateApplicationFleet($args->toArray());
        return new AssociateApplicationFleetResponse($result->toArray());
    }
}
