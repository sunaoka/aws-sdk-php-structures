<?php

namespace Sunaoka\Aws\Structures\Shield\DescribeSubscription;

trait DescribeSubscriptionTrait
{
    /**
     * @param DescribeSubscriptionRequest $args
     * @return DescribeSubscriptionResponse
     */
    public function describeSubscription(DescribeSubscriptionRequest $args)
    {
        $result = parent::describeSubscription($args->toArray());
        return new DescribeSubscriptionResponse($result->toArray());
    }
}
