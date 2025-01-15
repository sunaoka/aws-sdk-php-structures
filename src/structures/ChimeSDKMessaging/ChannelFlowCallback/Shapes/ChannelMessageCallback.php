<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ChannelFlowCallback\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MessageId
 * @property string|null $Content
 * @property string|null $Metadata
 * @property PushNotificationConfiguration|null $PushNotification
 * @property array<string, MessageAttributeValue>|null $MessageAttributes
 * @property string|null $SubChannelId
 * @property string|null $ContentType
 */
class ChannelMessageCallback extends Shape
{
    /**
     * @param array{
     *     MessageId: string,
     *     Content?: string|null,
     *     Metadata?: string|null,
     *     PushNotification?: PushNotificationConfiguration|null,
     *     MessageAttributes?: array<string, MessageAttributeValue>|null,
     *     SubChannelId?: string|null,
     *     ContentType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
