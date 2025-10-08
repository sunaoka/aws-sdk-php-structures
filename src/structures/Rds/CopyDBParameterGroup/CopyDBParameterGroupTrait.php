<?php

namespace Sunaoka\Aws\Structures\Rds\CopyDBParameterGroup;

trait CopyDBParameterGroupTrait
{
    /**
     * @param CopyDBParameterGroupRequest $args
     * @return CopyDBParameterGroupResponse
     */
    public function copyDBParameterGroup(CopyDBParameterGroupRequest $args)
    {
        $result = parent::copyDBParameterGroup($args->toArray());
        return new CopyDBParameterGroupResponse($result->toArray());
    }
}
