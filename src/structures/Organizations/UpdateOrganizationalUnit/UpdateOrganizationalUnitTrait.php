<?php

namespace Sunaoka\Aws\Structures\Organizations\UpdateOrganizationalUnit;

trait UpdateOrganizationalUnitTrait
{
    /**
     * @param UpdateOrganizationalUnitRequest $args
     * @return UpdateOrganizationalUnitResponse
     */
    public function updateOrganizationalUnit(UpdateOrganizationalUnitRequest $args)
    {
        $result = parent::updateOrganizationalUnit($args->toArray());
        return new UpdateOrganizationalUnitResponse($result->toArray());
    }
}
