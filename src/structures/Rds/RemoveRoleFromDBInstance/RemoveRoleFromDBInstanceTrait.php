<?php

namespace Sunaoka\Aws\Structures\Rds\RemoveRoleFromDBInstance;

trait RemoveRoleFromDBInstanceTrait
{
    /**
     * @param RemoveRoleFromDBInstanceRequest $args
     * @return void
     */
    public function removeRoleFromDBInstance(RemoveRoleFromDBInstanceRequest $args)
    {
        parent::removeRoleFromDBInstance($args->toArray());
    }
}
