<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\GetChannelMessageStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property string $MessageId
 * @property string $ChimeBearer
 * @property string $SubChannelId
 */
class GetChannelMessageStatusRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     MessageId: string,
     *     ChimeBearer: string,
     *     SubChannelId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
