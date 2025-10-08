<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListFuotaTasks;

trait ListFuotaTasksTrait
{
    /**
     * @param ListFuotaTasksRequest $args
     * @return ListFuotaTasksResponse
     */
    public function listFuotaTasks(ListFuotaTasksRequest $args)
    {
        $result = parent::listFuotaTasks($args->toArray());
        return new ListFuotaTasksResponse($result->toArray());
    }
}
