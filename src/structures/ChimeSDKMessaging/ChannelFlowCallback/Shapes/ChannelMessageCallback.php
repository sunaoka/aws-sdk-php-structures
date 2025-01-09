<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ChannelFlowCallback\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MessageId
 * @property string $Content
 * @property string $Metadata
 * @property PushNotificationConfiguration $PushNotification
 * @property array<string, MessageAttributeValue> $MessageAttributes
 * @property string $SubChannelId
 * @property string $ContentType
 */
class ChannelMessageCallback extends Shape
{
    /**
     * @param array{
     *     MessageId: string,
     *     Content?: string,
     *     Metadata?: string,
     *     PushNotification?: PushNotificationConfiguration,
     *     MessageAttributes?: array<string, MessageAttributeValue>,
     *     SubChannelId?: string,
     *     ContentType?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
