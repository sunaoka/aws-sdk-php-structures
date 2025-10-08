<?php

namespace Sunaoka\Aws\Structures\Rds\CopyDBClusterParameterGroup;

trait CopyDBClusterParameterGroupTrait
{
    /**
     * @param CopyDBClusterParameterGroupRequest $args
     * @return CopyDBClusterParameterGroupResponse
     */
    public function copyDBClusterParameterGroup(CopyDBClusterParameterGroupRequest $args)
    {
        $result = parent::copyDBClusterParameterGroup($args->toArray());
        return new CopyDBClusterParameterGroupResponse($result->toArray());
    }
}
