<?php

namespace Sunaoka\Aws\Structures\Neptune\CreateDBClusterParameterGroup;

trait CreateDBClusterParameterGroupTrait
{
    /**
     * @param CreateDBClusterParameterGroupRequest $args
     * @return CreateDBClusterParameterGroupResponse
     */
    public function createDBClusterParameterGroup(CreateDBClusterParameterGroupRequest $args)
    {
        $result = parent::createDBClusterParameterGroup($args->toArray());
        return new CreateDBClusterParameterGroupResponse($result->toArray());
    }
}
