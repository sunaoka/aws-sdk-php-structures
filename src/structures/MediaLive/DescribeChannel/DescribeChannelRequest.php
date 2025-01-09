<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelId
 */
class DescribeChannelRequest extends Request
{
    /**
     * @param array{ChannelId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
