<?php

namespace Sunaoka\Aws\Structures\Redshift\ResetClusterParameterGroup;

trait ResetClusterParameterGroupTrait
{
    /**
     * @param ResetClusterParameterGroupRequest $args
     * @return ResetClusterParameterGroupResponse
     */
    public function resetClusterParameterGroup(ResetClusterParameterGroupRequest $args)
    {
        $result = parent::resetClusterParameterGroup($args->toArray());
        return new ResetClusterParameterGroupResponse($result->toArray());
    }
}
