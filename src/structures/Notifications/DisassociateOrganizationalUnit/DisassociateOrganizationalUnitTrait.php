<?php

namespace Sunaoka\Aws\Structures\Notifications\DisassociateOrganizationalUnit;

trait DisassociateOrganizationalUnitTrait
{
    /**
     * @param DisassociateOrganizationalUnitRequest $args
     * @return DisassociateOrganizationalUnitResponse
     */
    public function disassociateOrganizationalUnit(DisassociateOrganizationalUnitRequest $args)
    {
        $result = parent::disassociateOrganizationalUnit($args->toArray());
        return new DisassociateOrganizationalUnitResponse($result->toArray());
    }
}
