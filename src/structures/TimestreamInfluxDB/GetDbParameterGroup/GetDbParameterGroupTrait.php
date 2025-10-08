<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\GetDbParameterGroup;

trait GetDbParameterGroupTrait
{
    /**
     * @param GetDbParameterGroupRequest $args
     * @return GetDbParameterGroupResponse
     */
    public function getDbParameterGroup(GetDbParameterGroupRequest $args)
    {
        $result = parent::getDbParameterGroup($args->toArray());
        return new GetDbParameterGroupResponse($result->toArray());
    }
}
