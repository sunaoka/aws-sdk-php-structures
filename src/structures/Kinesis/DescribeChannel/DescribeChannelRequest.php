<?php

namespace Sunaoka\Aws\Structures\Kinesis\DescribeChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelARN
 */
class DescribeChannelRequest extends Request
{
    /**
     * @param array{ChannelARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
