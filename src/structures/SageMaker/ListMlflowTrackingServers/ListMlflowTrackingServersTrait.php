<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListMlflowTrackingServers;

trait ListMlflowTrackingServersTrait
{
    /**
     * @param ListMlflowTrackingServersRequest $args
     * @return ListMlflowTrackingServersResponse
     */
    public function listMlflowTrackingServers(ListMlflowTrackingServersRequest $args)
    {
        $result = parent::listMlflowTrackingServers($args->toArray());
        return new ListMlflowTrackingServersResponse($result->toArray());
    }
}
