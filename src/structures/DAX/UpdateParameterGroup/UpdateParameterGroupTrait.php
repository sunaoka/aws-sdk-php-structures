<?php

namespace Sunaoka\Aws\Structures\DAX\UpdateParameterGroup;

trait UpdateParameterGroupTrait
{
    /**
     * @param UpdateParameterGroupRequest $args
     * @return UpdateParameterGroupResponse
     */
    public function updateParameterGroup(UpdateParameterGroupRequest $args)
    {
        $result = parent::updateParameterGroup($args->toArray());
        return new UpdateParameterGroupResponse($result->toArray());
    }
}
