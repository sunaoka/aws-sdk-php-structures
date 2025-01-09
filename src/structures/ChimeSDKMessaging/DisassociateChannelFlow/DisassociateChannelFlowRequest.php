<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\DisassociateChannelFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property string $ChannelFlowArn
 * @property string $ChimeBearer
 */
class DisassociateChannelFlowRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     ChannelFlowArn: string,
     *     ChimeBearer: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
