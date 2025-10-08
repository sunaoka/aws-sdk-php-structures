<?php

namespace Sunaoka\Aws\Structures\Connect\DisassociateTrafficDistributionGroupUser;

trait DisassociateTrafficDistributionGroupUserTrait
{
    /**
     * @param DisassociateTrafficDistributionGroupUserRequest $args
     * @return DisassociateTrafficDistributionGroupUserResponse
     */
    public function disassociateTrafficDistributionGroupUser(DisassociateTrafficDistributionGroupUserRequest $args)
    {
        $result = parent::disassociateTrafficDistributionGroupUser($args->toArray());
        return new DisassociateTrafficDistributionGroupUserResponse($result->toArray());
    }
}
