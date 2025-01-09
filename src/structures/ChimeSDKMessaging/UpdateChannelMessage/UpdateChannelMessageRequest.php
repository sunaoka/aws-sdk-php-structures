<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\UpdateChannelMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property string $MessageId
 * @property string $Content
 * @property string $Metadata
 * @property string $ChimeBearer
 * @property string $SubChannelId
 * @property string $ContentType
 */
class UpdateChannelMessageRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     MessageId: string,
     *     Content: string,
     *     Metadata?: string,
     *     ChimeBearer: string,
     *     SubChannelId?: string,
     *     ContentType?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
