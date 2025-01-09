<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\DeleteChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property string $ChimeBearer
 */
class DeleteChannelRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     ChimeBearer: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
