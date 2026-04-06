<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\GetDbInstance;

trait GetDbInstanceTrait
{
    /**
     * @param GetDbInstanceRequest $args
     * @return GetDbInstanceResponse
     */
    public function getDbInstance(GetDbInstanceRequest $args)
    {
        $result = parent::getDbInstance($args->toArray());
        return new GetDbInstanceResponse($result->toArray());
    }
}
