<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\DescribeChannelFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelFlowArn
 */
class DescribeChannelFlowRequest extends Request
{
    /**
     * @param array{ChannelFlowArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
