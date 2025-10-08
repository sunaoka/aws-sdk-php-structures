<?php

namespace Sunaoka\Aws\Structures\Rds\AddRoleToDBCluster;

trait AddRoleToDBClusterTrait
{
    /**
     * @param AddRoleToDBClusterRequest $args
     * @return void
     */
    public function addRoleToDBCluster(AddRoleToDBClusterRequest $args)
    {
        parent::addRoleToDBCluster($args->toArray());
    }
}
