<?php

namespace Sunaoka\Aws\Structures\MemoryDB\ResetParameterGroup;

trait ResetParameterGroupTrait
{
    /**
     * @param ResetParameterGroupRequest $args
     * @return ResetParameterGroupResponse
     */
    public function resetParameterGroup(ResetParameterGroupRequest $args)
    {
        $result = parent::resetParameterGroup($args->toArray());
        return new ResetParameterGroupResponse($result->toArray());
    }
}
