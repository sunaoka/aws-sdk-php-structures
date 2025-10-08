<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotDatafeedSubscription;

trait DescribeSpotDatafeedSubscriptionTrait
{
    /**
     * @param DescribeSpotDatafeedSubscriptionRequest $args
     * @return DescribeSpotDatafeedSubscriptionResponse
     */
    public function describeSpotDatafeedSubscription(DescribeSpotDatafeedSubscriptionRequest $args)
    {
        $result = parent::describeSpotDatafeedSubscription($args->toArray());
        return new DescribeSpotDatafeedSubscriptionResponse($result->toArray());
    }
}
