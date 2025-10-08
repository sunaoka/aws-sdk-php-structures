<?php

namespace Sunaoka\Aws\Structures\Rds\StartDBInstance;

trait StartDBInstanceTrait
{
    /**
     * @param StartDBInstanceRequest $args
     * @return StartDBInstanceResponse
     */
    public function startDBInstance(StartDBInstanceRequest $args)
    {
        $result = parent::startDBInstance($args->toArray());
        return new StartDBInstanceResponse($result->toArray());
    }
}
