<?php

namespace Sunaoka\Aws\Structures\DocDB\ModifyDBClusterParameterGroup;

trait ModifyDBClusterParameterGroupTrait
{
    /**
     * @param ModifyDBClusterParameterGroupRequest $args
     * @return ModifyDBClusterParameterGroupResponse
     */
    public function modifyDBClusterParameterGroup(ModifyDBClusterParameterGroupRequest $args)
    {
        $result = parent::modifyDBClusterParameterGroup($args->toArray());
        return new ModifyDBClusterParameterGroupResponse($result->toArray());
    }
}
