<?php

namespace Sunaoka\Aws\Structures\Appstream\DisassociateApplicationFleet;

trait DisassociateApplicationFleetTrait
{
    /**
     * @param DisassociateApplicationFleetRequest $args
     * @return DisassociateApplicationFleetResponse
     */
    public function disassociateApplicationFleet(DisassociateApplicationFleetRequest $args)
    {
        $result = parent::disassociateApplicationFleet($args->toArray());
        return new DisassociateApplicationFleetResponse($result->toArray());
    }
}
