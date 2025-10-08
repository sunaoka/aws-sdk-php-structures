<?php

namespace Sunaoka\Aws\Structures\Neptune\CreateDBInstance;

trait CreateDBInstanceTrait
{
    /**
     * @param CreateDBInstanceRequest $args
     * @return CreateDBInstanceResponse
     */
    public function createDBInstance(CreateDBInstanceRequest $args)
    {
        $result = parent::createDBInstance($args->toArray());
        return new CreateDBInstanceResponse($result->toArray());
    }
}
