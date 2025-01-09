<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ChannelFlowCallback;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CallbackId
 * @property string $ChannelArn
 * @property bool $DeleteResource
 * @property Shapes\ChannelMessageCallback $ChannelMessage
 */
class ChannelFlowCallbackRequest extends Request
{
    /**
     * @param array{
     *     CallbackId: string,
     *     ChannelArn: string,
     *     DeleteResource?: bool,
     *     ChannelMessage: Shapes\ChannelMessageCallback
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
