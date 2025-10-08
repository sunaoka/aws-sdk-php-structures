<?php

namespace Sunaoka\Aws\Structures\Notifications\AssociateOrganizationalUnit;

trait AssociateOrganizationalUnitTrait
{
    /**
     * @param AssociateOrganizationalUnitRequest $args
     * @return AssociateOrganizationalUnitResponse
     */
    public function associateOrganizationalUnit(AssociateOrganizationalUnitRequest $args)
    {
        $result = parent::associateOrganizationalUnit($args->toArray());
        return new AssociateOrganizationalUnitResponse($result->toArray());
    }
}
