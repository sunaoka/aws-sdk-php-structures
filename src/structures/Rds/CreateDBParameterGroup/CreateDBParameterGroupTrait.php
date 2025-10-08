<?php

namespace Sunaoka\Aws\Structures\Rds\CreateDBParameterGroup;

trait CreateDBParameterGroupTrait
{
    /**
     * @param CreateDBParameterGroupRequest $args
     * @return CreateDBParameterGroupResponse
     */
    public function createDBParameterGroup(CreateDBParameterGroupRequest $args)
    {
        $result = parent::createDBParameterGroup($args->toArray());
        return new CreateDBParameterGroupResponse($result->toArray());
    }
}
