<?php

namespace Sunaoka\Aws\Structures\Neptune\RemoveRoleFromDBCluster;

trait RemoveRoleFromDBClusterTrait
{
    /**
     * @param RemoveRoleFromDBClusterRequest $args
     * @return void
     */
    public function removeRoleFromDBCluster(RemoveRoleFromDBClusterRequest $args)
    {
        parent::removeRoleFromDBCluster($args->toArray());
    }
}
