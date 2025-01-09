<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\DescribeSignalingChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelName
 * @property string $ChannelARN
 */
class DescribeSignalingChannelRequest extends Request
{
    /**
     * @param array{
     *     ChannelName?: string,
     *     ChannelARN?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
