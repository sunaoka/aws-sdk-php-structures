<?php

namespace Sunaoka\Aws\Structures\Ec2\UpdateCapacityManagerOrganizationsAccess;

trait UpdateCapacityManagerOrganizationsAccessTrait
{
    /**
     * @param UpdateCapacityManagerOrganizationsAccessRequest $args
     * @return UpdateCapacityManagerOrganizationsAccessResponse
     */
    public function updateCapacityManagerOrganizationsAccess(UpdateCapacityManagerOrganizationsAccessRequest $args)
    {
        $result = parent::updateCapacityManagerOrganizationsAccess($args->toArray());
        return new UpdateCapacityManagerOrganizationsAccessResponse($result->toArray());
    }
}
