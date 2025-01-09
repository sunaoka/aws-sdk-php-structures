<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\SendChannelMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property string $Content
 * @property 'STANDARD'|'CONTROL' $Type
 * @property 'PERSISTENT'|'NON_PERSISTENT' $Persistence
 * @property string $Metadata
 * @property string $ClientRequestToken
 * @property string $ChimeBearer
 * @property Shapes\PushNotificationConfiguration $PushNotification
 * @property array<string, Shapes\MessageAttributeValue> $MessageAttributes
 * @property string $SubChannelId
 * @property string $ContentType
 * @property list<Shapes\Target> $Target
 */
class SendChannelMessageRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     Content: string,
     *     Type: 'STANDARD'|'CONTROL',
     *     Persistence: 'PERSISTENT'|'NON_PERSISTENT',
     *     Metadata?: string,
     *     ClientRequestToken: string,
     *     ChimeBearer: string,
     *     PushNotification?: Shapes\PushNotificationConfiguration,
     *     MessageAttributes?: array<string, Shapes\MessageAttributeValue>,
     *     SubChannelId?: string,
     *     ContentType?: string,
     *     Target?: list<Shapes\Target>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
