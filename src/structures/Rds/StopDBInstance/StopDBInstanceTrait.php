<?php

namespace Sunaoka\Aws\Structures\Rds\StopDBInstance;

trait StopDBInstanceTrait
{
    /**
     * @param StopDBInstanceRequest $args
     * @return StopDBInstanceResponse
     */
    public function stopDBInstance(StopDBInstanceRequest $args)
    {
        $result = parent::stopDBInstance($args->toArray());
        return new StopDBInstanceResponse($result->toArray());
    }
}
