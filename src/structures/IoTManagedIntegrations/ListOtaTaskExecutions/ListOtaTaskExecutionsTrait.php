<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListOtaTaskExecutions;

trait ListOtaTaskExecutionsTrait
{
    /**
     * @param ListOtaTaskExecutionsRequest $args
     * @return ListOtaTaskExecutionsResponse
     */
    public function listOtaTaskExecutions(ListOtaTaskExecutionsRequest $args)
    {
        $result = parent::listOtaTaskExecutions($args->toArray());
        return new ListOtaTaskExecutionsResponse($result->toArray());
    }
}
