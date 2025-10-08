<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyClusterSubnetGroup;

trait ModifyClusterSubnetGroupTrait
{
    /**
     * @param ModifyClusterSubnetGroupRequest $args
     * @return ModifyClusterSubnetGroupResponse
     */
    public function modifyClusterSubnetGroup(ModifyClusterSubnetGroupRequest $args)
    {
        $result = parent::modifyClusterSubnetGroup($args->toArray());
        return new ModifyClusterSubnetGroupResponse($result->toArray());
    }
}
