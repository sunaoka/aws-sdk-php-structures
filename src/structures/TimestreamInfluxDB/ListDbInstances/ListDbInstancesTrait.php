<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\ListDbInstances;

trait ListDbInstancesTrait
{
    /**
     * @param ListDbInstancesRequest $args
     * @return ListDbInstancesResponse
     */
    public function listDbInstances(ListDbInstancesRequest $args)
    {
        $result = parent::listDbInstances($args->toArray());
        return new ListDbInstancesResponse($result->toArray());
    }
}
