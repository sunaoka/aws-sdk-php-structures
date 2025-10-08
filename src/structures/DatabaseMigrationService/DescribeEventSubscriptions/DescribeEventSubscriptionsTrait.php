<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeEventSubscriptions;

trait DescribeEventSubscriptionsTrait
{
    /**
     * @param DescribeEventSubscriptionsRequest $args
     * @return DescribeEventSubscriptionsResponse
     */
    public function describeEventSubscriptions(DescribeEventSubscriptionsRequest $args)
    {
        $result = parent::describeEventSubscriptions($args->toArray());
        return new DescribeEventSubscriptionsResponse($result->toArray());
    }
}
