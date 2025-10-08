<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeDeliveryChannelStatus;

trait DescribeDeliveryChannelStatusTrait
{
    /**
     * @param DescribeDeliveryChannelStatusRequest $args
     * @return DescribeDeliveryChannelStatusResponse
     */
    public function describeDeliveryChannelStatus(DescribeDeliveryChannelStatusRequest $args)
    {
        $result = parent::describeDeliveryChannelStatus($args->toArray());
        return new DescribeDeliveryChannelStatusResponse($result->toArray());
    }
}
