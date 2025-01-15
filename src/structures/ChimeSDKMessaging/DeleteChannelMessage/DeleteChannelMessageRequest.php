<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\DeleteChannelMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property string $MessageId
 * @property string $ChimeBearer
 * @property string|null $SubChannelId
 */
class DeleteChannelMessageRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     MessageId: string,
     *     ChimeBearer: string,
     *     SubChannelId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
