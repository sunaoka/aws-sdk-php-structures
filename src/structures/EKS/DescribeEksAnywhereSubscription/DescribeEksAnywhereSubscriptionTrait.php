<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeEksAnywhereSubscription;

trait DescribeEksAnywhereSubscriptionTrait
{
    /**
     * @param DescribeEksAnywhereSubscriptionRequest $args
     * @return DescribeEksAnywhereSubscriptionResponse
     */
    public function describeEksAnywhereSubscription(DescribeEksAnywhereSubscriptionRequest $args)
    {
        $result = parent::describeEksAnywhereSubscription($args->toArray());
        return new DescribeEksAnywhereSubscriptionResponse($result->toArray());
    }
}
