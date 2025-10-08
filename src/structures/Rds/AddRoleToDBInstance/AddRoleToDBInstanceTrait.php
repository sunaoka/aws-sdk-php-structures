<?php

namespace Sunaoka\Aws\Structures\Rds\AddRoleToDBInstance;

trait AddRoleToDBInstanceTrait
{
    /**
     * @param AddRoleToDBInstanceRequest $args
     * @return void
     */
    public function addRoleToDBInstance(AddRoleToDBInstanceRequest $args)
    {
        parent::addRoleToDBInstance($args->toArray());
    }
}
