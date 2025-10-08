<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteDBClusterParameterGroup;

trait DeleteDBClusterParameterGroupTrait
{
    /**
     * @param DeleteDBClusterParameterGroupRequest $args
     * @return void
     */
    public function deleteDBClusterParameterGroup(DeleteDBClusterParameterGroupRequest $args)
    {
        parent::deleteDBClusterParameterGroup($args->toArray());
    }
}
