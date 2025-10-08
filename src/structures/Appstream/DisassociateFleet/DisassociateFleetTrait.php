<?php

namespace Sunaoka\Aws\Structures\Appstream\DisassociateFleet;

trait DisassociateFleetTrait
{
    /**
     * @param DisassociateFleetRequest $args
     * @return DisassociateFleetResponse
     */
    public function disassociateFleet(DisassociateFleetRequest $args)
    {
        $result = parent::disassociateFleet($args->toArray());
        return new DisassociateFleetResponse($result->toArray());
    }
}
