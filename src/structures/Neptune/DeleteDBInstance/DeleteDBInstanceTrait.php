<?php

namespace Sunaoka\Aws\Structures\Neptune\DeleteDBInstance;

trait DeleteDBInstanceTrait
{
    /**
     * @param DeleteDBInstanceRequest $args
     * @return DeleteDBInstanceResponse
     */
    public function deleteDBInstance(DeleteDBInstanceRequest $args)
    {
        $result = parent::deleteDBInstance($args->toArray());
        return new DeleteDBInstanceResponse($result->toArray());
    }
}
