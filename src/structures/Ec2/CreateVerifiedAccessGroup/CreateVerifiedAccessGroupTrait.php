<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVerifiedAccessGroup;

trait CreateVerifiedAccessGroupTrait
{
    /**
     * @param CreateVerifiedAccessGroupRequest $args
     * @return CreateVerifiedAccessGroupResponse
     */
    public function createVerifiedAccessGroup(CreateVerifiedAccessGroupRequest $args)
    {
        $result = parent::createVerifiedAccessGroup($args->toArray());
        return new CreateVerifiedAccessGroupResponse($result->toArray());
    }
}
