<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\DeleteChannelFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelFlowArn
 */
class DeleteChannelFlowRequest extends Request
{
    /**
     * @param array{ChannelFlowArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
