<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBParameterGroup;

trait ModifyDBParameterGroupTrait
{
    /**
     * @param ModifyDBParameterGroupRequest $args
     * @return ModifyDBParameterGroupResponse
     */
    public function modifyDBParameterGroup(ModifyDBParameterGroupRequest $args)
    {
        $result = parent::modifyDBParameterGroup($args->toArray());
        return new ModifyDBParameterGroupResponse($result->toArray());
    }
}
