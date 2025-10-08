<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\ListAppInstances;

trait ListAppInstancesTrait
{
    /**
     * @param ListAppInstancesRequest $args
     * @return ListAppInstancesResponse
     */
    public function listAppInstances(ListAppInstancesRequest $args)
    {
        $result = parent::listAppInstances($args->toArray());
        return new ListAppInstancesResponse($result->toArray());
    }
}
