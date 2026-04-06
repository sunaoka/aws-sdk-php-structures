<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\CreateDbParameterGroup;

trait CreateDbParameterGroupTrait
{
    /**
     * @param CreateDbParameterGroupRequest $args
     * @return CreateDbParameterGroupResponse
     */
    public function createDbParameterGroup(CreateDbParameterGroupRequest $args)
    {
        $result = parent::createDbParameterGroup($args->toArray());
        return new CreateDbParameterGroupResponse($result->toArray());
    }
}
