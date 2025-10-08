<?php

namespace Sunaoka\Aws\Structures\Rds\RebootDBInstance;

trait RebootDBInstanceTrait
{
    /**
     * @param RebootDBInstanceRequest $args
     * @return RebootDBInstanceResponse
     */
    public function rebootDBInstance(RebootDBInstanceRequest $args)
    {
        $result = parent::rebootDBInstance($args->toArray());
        return new RebootDBInstanceResponse($result->toArray());
    }
}
