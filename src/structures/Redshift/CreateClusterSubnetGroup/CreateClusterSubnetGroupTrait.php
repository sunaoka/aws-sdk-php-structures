<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateClusterSubnetGroup;

trait CreateClusterSubnetGroupTrait
{
    /**
     * @param CreateClusterSubnetGroupRequest $args
     * @return CreateClusterSubnetGroupResponse
     */
    public function createClusterSubnetGroup(CreateClusterSubnetGroupRequest $args)
    {
        $result = parent::createClusterSubnetGroup($args->toArray());
        return new CreateClusterSubnetGroupResponse($result->toArray());
    }
}
