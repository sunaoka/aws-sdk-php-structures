<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\UpdateChannelMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property string $MessageId
 * @property string $Content
 * @property string|null $Metadata
 * @property string $ChimeBearer
 * @property string|null $SubChannelId
 * @property string|null $ContentType
 */
class UpdateChannelMessageRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     MessageId: string,
     *     Content: string,
     *     Metadata?: string|null,
     *     ChimeBearer: string,
     *     SubChannelId?: string|null,
     *     ContentType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
