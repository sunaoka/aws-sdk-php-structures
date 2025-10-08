<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\DeleteDbInstance;

trait DeleteDbInstanceTrait
{
    /**
     * @param DeleteDbInstanceRequest $args
     * @return DeleteDbInstanceResponse
     */
    public function deleteDbInstance(DeleteDbInstanceRequest $args)
    {
        $result = parent::deleteDbInstance($args->toArray());
        return new DeleteDbInstanceResponse($result->toArray());
    }
}
