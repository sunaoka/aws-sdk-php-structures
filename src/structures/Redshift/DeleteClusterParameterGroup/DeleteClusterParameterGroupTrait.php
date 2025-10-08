<?php

namespace Sunaoka\Aws\Structures\Redshift\DeleteClusterParameterGroup;

trait DeleteClusterParameterGroupTrait
{
    /**
     * @param DeleteClusterParameterGroupRequest $args
     * @return void
     */
    public function deleteClusterParameterGroup(DeleteClusterParameterGroupRequest $args)
    {
        parent::deleteClusterParameterGroup($args->toArray());
    }
}
