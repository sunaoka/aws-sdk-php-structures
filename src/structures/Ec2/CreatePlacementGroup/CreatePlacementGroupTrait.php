<?php

namespace Sunaoka\Aws\Structures\Ec2\CreatePlacementGroup;

trait CreatePlacementGroupTrait
{
    /**
     * @param CreatePlacementGroupRequest $args
     * @return CreatePlacementGroupResponse
     */
    public function createPlacementGroup(CreatePlacementGroupRequest $args)
    {
        $result = parent::createPlacementGroup($args->toArray());
        return new CreatePlacementGroupResponse($result->toArray());
    }
}
