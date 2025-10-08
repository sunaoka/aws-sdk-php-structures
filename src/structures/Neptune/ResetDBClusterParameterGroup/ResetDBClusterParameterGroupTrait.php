<?php

namespace Sunaoka\Aws\Structures\Neptune\ResetDBClusterParameterGroup;

trait ResetDBClusterParameterGroupTrait
{
    /**
     * @param ResetDBClusterParameterGroupRequest $args
     * @return ResetDBClusterParameterGroupResponse
     */
    public function resetDBClusterParameterGroup(ResetDBClusterParameterGroupRequest $args)
    {
        $result = parent::resetDBClusterParameterGroup($args->toArray());
        return new ResetDBClusterParameterGroupResponse($result->toArray());
    }
}
