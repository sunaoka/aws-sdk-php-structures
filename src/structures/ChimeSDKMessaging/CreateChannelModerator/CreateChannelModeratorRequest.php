<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\CreateChannelModerator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property string $ChannelModeratorArn
 * @property string $ChimeBearer
 */
class CreateChannelModeratorRequest extends Request
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
