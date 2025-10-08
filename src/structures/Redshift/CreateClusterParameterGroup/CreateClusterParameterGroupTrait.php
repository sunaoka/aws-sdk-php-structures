<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateClusterParameterGroup;

trait CreateClusterParameterGroupTrait
{
    /**
     * @param CreateClusterParameterGroupRequest $args
     * @return CreateClusterParameterGroupResponse
     */
    public function createClusterParameterGroup(CreateClusterParameterGroupRequest $args)
    {
        $result = parent::createClusterParameterGroup($args->toArray());
        return new CreateClusterParameterGroupResponse($result->toArray());
    }
}
