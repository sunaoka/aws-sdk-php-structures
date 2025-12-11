<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateRootDomainUnitOwner;

trait UpdateRootDomainUnitOwnerTrait
{
    /**
     * @param UpdateRootDomainUnitOwnerRequest $args
     * @return UpdateRootDomainUnitOwnerResponse
     */
    public function updateRootDomainUnitOwner(UpdateRootDomainUnitOwnerRequest $args)
    {
        $result = parent::updateRootDomainUnitOwner($args->toArray());
        return new UpdateRootDomainUnitOwnerResponse($result->toArray());
    }
}
