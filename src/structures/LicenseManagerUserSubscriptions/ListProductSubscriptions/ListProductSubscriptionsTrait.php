<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\ListProductSubscriptions;

trait ListProductSubscriptionsTrait
{
    /**
     * @param ListProductSubscriptionsRequest $args
     * @return ListProductSubscriptionsResponse
     */
    public function listProductSubscriptions(ListProductSubscriptionsRequest $args)
    {
        $result = parent::listProductSubscriptions($args->toArray());
        return new ListProductSubscriptionsResponse($result->toArray());
    }
}
