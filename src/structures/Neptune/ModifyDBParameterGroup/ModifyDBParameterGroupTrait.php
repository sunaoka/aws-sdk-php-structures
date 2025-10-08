<?php

namespace Sunaoka\Aws\Structures\Neptune\ModifyDBParameterGroup;

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
