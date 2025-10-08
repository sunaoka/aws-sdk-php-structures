<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessGroup;

trait ModifyVerifiedAccessGroupTrait
{
    /**
     * @param ModifyVerifiedAccessGroupRequest $args
     * @return ModifyVerifiedAccessGroupResponse
     */
    public function modifyVerifiedAccessGroup(ModifyVerifiedAccessGroupRequest $args)
    {
        $result = parent::modifyVerifiedAccessGroup($args->toArray());
        return new ModifyVerifiedAccessGroupResponse($result->toArray());
    }
}
