<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\CreateDbInstance;

trait CreateDbInstanceTrait
{
    /**
     * @param CreateDbInstanceRequest $args
     * @return CreateDbInstanceResponse
     */
    public function createDbInstance(CreateDbInstanceRequest $args)
    {
        $result = parent::createDbInstance($args->toArray());
        return new CreateDbInstanceResponse($result->toArray());
    }
}
