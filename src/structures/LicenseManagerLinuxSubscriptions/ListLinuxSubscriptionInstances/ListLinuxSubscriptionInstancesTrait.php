<?php

namespace Sunaoka\Aws\Structures\LicenseManagerLinuxSubscriptions\ListLinuxSubscriptionInstances;

trait ListLinuxSubscriptionInstancesTrait
{
    /**
     * @param ListLinuxSubscriptionInstancesRequest $args
     * @return ListLinuxSubscriptionInstancesResponse
     */
    public function listLinuxSubscriptionInstances(ListLinuxSubscriptionInstancesRequest $args)
    {
        $result = parent::listLinuxSubscriptionInstances($args->toArray());
        return new ListLinuxSubscriptionInstancesResponse($result->toArray());
    }
}
