<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeDeliveryChannels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $DeliveryChannelNames
 */
class DescribeDeliveryChannelsRequest extends Request
{
    /**
     * @param array{DeliveryChannelNames?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
