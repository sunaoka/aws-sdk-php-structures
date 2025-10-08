<?php

namespace Sunaoka\Aws\Structures\Organizations\CreateOrganizationalUnit;

trait CreateOrganizationalUnitTrait
{
    /**
     * @param CreateOrganizationalUnitRequest $args
     * @return CreateOrganizationalUnitResponse
     */
    public function createOrganizationalUnit(CreateOrganizationalUnitRequest $args)
    {
        $result = parent::createOrganizationalUnit($args->toArray());
        return new CreateOrganizationalUnitResponse($result->toArray());
    }
}
