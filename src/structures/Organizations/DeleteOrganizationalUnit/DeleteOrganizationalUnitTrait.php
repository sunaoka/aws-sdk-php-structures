<?php

namespace Sunaoka\Aws\Structures\Organizations\DeleteOrganizationalUnit;

trait DeleteOrganizationalUnitTrait
{
    /**
     * @param DeleteOrganizationalUnitRequest $args
     * @return void
     */
    public function deleteOrganizationalUnit(DeleteOrganizationalUnitRequest $args)
    {
        parent::deleteOrganizationalUnit($args->toArray());
    }
}
