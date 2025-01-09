<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\UpdateChannelReadMarker;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property string $ChimeBearer
 */
class UpdateChannelReadMarkerRequest extends Request
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
