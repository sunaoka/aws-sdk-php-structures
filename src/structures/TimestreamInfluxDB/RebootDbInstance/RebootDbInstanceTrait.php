<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\RebootDbInstance;

trait RebootDbInstanceTrait
{
    /**
     * @param RebootDbInstanceRequest $args
     * @return RebootDbInstanceResponse
     */
    public function rebootDbInstance(RebootDbInstanceRequest $args)
    {
        $result = parent::rebootDbInstance($args->toArray());
        return new RebootDbInstanceResponse($result->toArray());
    }
}
