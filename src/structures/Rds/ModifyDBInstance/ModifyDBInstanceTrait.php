<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBInstance;

trait ModifyDBInstanceTrait
{
    /**
     * @param ModifyDBInstanceRequest $args
     * @return ModifyDBInstanceResponse
     */
    public function modifyDBInstance(ModifyDBInstanceRequest $args)
    {
        $result = parent::modifyDBInstance($args->toArray());
        return new ModifyDBInstanceResponse($result->toArray());
    }
}
