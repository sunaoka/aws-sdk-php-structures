<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetVoiceConnectorStreamingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EventBridge'|'SNS'|'SQS'|null $NotificationTarget
 */
class StreamingNotificationTarget extends Shape
{
    /**
     * @param array{NotificationTarget?: 'EventBridge'|'SNS'|'SQS'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
