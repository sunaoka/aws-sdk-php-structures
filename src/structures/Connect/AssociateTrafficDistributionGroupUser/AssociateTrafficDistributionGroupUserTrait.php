<?php

namespace Sunaoka\Aws\Structures\Connect\AssociateTrafficDistributionGroupUser;

trait AssociateTrafficDistributionGroupUserTrait
{
    /**
     * @param AssociateTrafficDistributionGroupUserRequest $args
     * @return AssociateTrafficDistributionGroupUserResponse
     */
    public function associateTrafficDistributionGroupUser(AssociateTrafficDistributionGroupUserRequest $args)
    {
        $result = parent::associateTrafficDistributionGroupUser($args->toArray());
        return new AssociateTrafficDistributionGroupUserResponse($result->toArray());
    }
}
