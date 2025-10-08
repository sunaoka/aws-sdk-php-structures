<?php

namespace Sunaoka\Aws\Structures\Neptune\ResetDBParameterGroup;

trait ResetDBParameterGroupTrait
{
    /**
     * @param ResetDBParameterGroupRequest $args
     * @return ResetDBParameterGroupResponse
     */
    public function resetDBParameterGroup(ResetDBParameterGroupRequest $args)
    {
        $result = parent::resetDBParameterGroup($args->toArray());
        return new ResetDBParameterGroupResponse($result->toArray());
    }
}
