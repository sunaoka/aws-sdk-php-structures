<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property string $ClusterArn
 */
class DescribeChannelRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     ClusterArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
