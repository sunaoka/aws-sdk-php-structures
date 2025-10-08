<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVerifiedAccessGroup;

trait DeleteVerifiedAccessGroupTrait
{
    /**
     * @param DeleteVerifiedAccessGroupRequest $args
     * @return DeleteVerifiedAccessGroupResponse
     */
    public function deleteVerifiedAccessGroup(DeleteVerifiedAccessGroupRequest $args)
    {
        $result = parent::deleteVerifiedAccessGroup($args->toArray());
        return new DeleteVerifiedAccessGroupResponse($result->toArray());
    }
}
