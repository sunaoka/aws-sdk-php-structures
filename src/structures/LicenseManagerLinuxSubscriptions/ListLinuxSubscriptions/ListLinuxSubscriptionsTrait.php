<?php

namespace Sunaoka\Aws\Structures\LicenseManagerLinuxSubscriptions\ListLinuxSubscriptions;

trait ListLinuxSubscriptionsTrait
{
    /**
     * @param ListLinuxSubscriptionsRequest $args
     * @return ListLinuxSubscriptionsResponse
     */
    public function listLinuxSubscriptions(ListLinuxSubscriptionsRequest $args)
    {
        $result = parent::listLinuxSubscriptions($args->toArray());
        return new ListLinuxSubscriptionsResponse($result->toArray());
    }
}
