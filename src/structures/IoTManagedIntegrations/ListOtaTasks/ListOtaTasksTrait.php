<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListOtaTasks;

trait ListOtaTasksTrait
{
    /**
     * @param ListOtaTasksRequest $args
     * @return ListOtaTasksResponse
     */
    public function listOtaTasks(ListOtaTasksRequest $args)
    {
        $result = parent::listOtaTasks($args->toArray());
        return new ListOtaTasksResponse($result->toArray());
    }
}
