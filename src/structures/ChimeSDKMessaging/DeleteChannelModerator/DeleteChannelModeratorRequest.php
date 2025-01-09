<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\DeleteChannelModerator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property string $ChannelModeratorArn
 * @property string $ChimeBearer
 */
class DeleteChannelModeratorRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     ChannelModeratorArn: string,
     *     ChimeBearer: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
