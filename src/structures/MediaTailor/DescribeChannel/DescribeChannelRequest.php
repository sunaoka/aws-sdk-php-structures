<?php

namespace Sunaoka\Aws\Structures\MediaTailor\DescribeChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelName
 */
class DescribeChannelRequest extends Request
{
    /**
     * @param array{ChannelName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
