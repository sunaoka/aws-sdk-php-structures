<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAccountSubscription;

trait DescribeAccountSubscriptionTrait
{
    /**
     * @param DescribeAccountSubscriptionRequest $args
     * @return DescribeAccountSubscriptionResponse
     */
    public function describeAccountSubscription(DescribeAccountSubscriptionRequest $args)
    {
        $result = parent::describeAccountSubscription($args->toArray());
        return new DescribeAccountSubscriptionResponse($result->toArray());
    }
}
