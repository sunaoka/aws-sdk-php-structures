<?php

namespace Sunaoka\Aws\Structures\Route53\ListTrafficPolicyInstances;

trait ListTrafficPolicyInstancesTrait
{
    /**
     * @param ListTrafficPolicyInstancesRequest $args
     * @return ListTrafficPolicyInstancesResponse
     */
    public function listTrafficPolicyInstances(ListTrafficPolicyInstancesRequest $args)
    {
        $result = parent::listTrafficPolicyInstances($args->toArray());
        return new ListTrafficPolicyInstancesResponse($result->toArray());
    }
}
