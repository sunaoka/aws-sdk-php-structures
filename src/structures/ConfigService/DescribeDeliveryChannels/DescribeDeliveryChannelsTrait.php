<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeDeliveryChannels;

trait DescribeDeliveryChannelsTrait
{
    /**
     * @param DescribeDeliveryChannelsRequest $args
     * @return DescribeDeliveryChannelsResponse
     */
    public function describeDeliveryChannels(DescribeDeliveryChannelsRequest $args)
    {
        $result = parent::describeDeliveryChannels($args->toArray());
        return new DescribeDeliveryChannelsResponse($result->toArray());
    }
}
