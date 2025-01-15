<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\SendChannelMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property string $Content
 * @property 'STANDARD'|'CONTROL' $Type
 * @property 'PERSISTENT'|'NON_PERSISTENT' $Persistence
 * @property string|null $Metadata
 * @property string $ClientRequestToken
 * @property string $ChimeBearer
 * @property Shapes\PushNotificationConfiguration|null $PushNotification
 * @property array<string, Shapes\MessageAttributeValue>|null $MessageAttributes
 * @property string|null $SubChannelId
 * @property string|null $ContentType
 * @property list<Shapes\Target>|null $Target
 */
class SendChannelMessageRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     Content: string,
     *     Type: 'STANDARD'|'CONTROL',
     *     Persistence: 'PERSISTENT'|'NON_PERSISTENT',
     *     Metadata?: string|null,
     *     ClientRequestToken: string,
     *     ChimeBearer: string,
     *     PushNotification?: Shapes\PushNotificationConfiguration|null,
     *     MessageAttributes?: array<string, Shapes\MessageAttributeValue>|null,
     *     SubChannelId?: string|null,
     *     ContentType?: string|null,
     *     Target?: list<Shapes\Target>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
