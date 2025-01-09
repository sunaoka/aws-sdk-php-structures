<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeDeliveryChannelStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $DeliveryChannelNames
 */
class DescribeDeliveryChannelStatusRequest extends Request
{
    /**
     * @param array{DeliveryChannelNames?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
