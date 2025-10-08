<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyClusterParameterGroup;

trait ModifyClusterParameterGroupTrait
{
    /**
     * @param ModifyClusterParameterGroupRequest $args
     * @return ModifyClusterParameterGroupResponse
     */
    public function modifyClusterParameterGroup(ModifyClusterParameterGroupRequest $args)
    {
        $result = parent::modifyClusterParameterGroup($args->toArray());
        return new ModifyClusterParameterGroupResponse($result->toArray());
    }
}
