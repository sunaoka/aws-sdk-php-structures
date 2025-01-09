<?php

namespace Sunaoka\Aws\Structures\Chime\PutVoiceConnectorStreamingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EventBridge'|'SNS'|'SQS' $NotificationTarget
 */
class StreamingNotificationTarget extends Shape
{
    /**
     * @param array{NotificationTarget: 'EventBridge'|'SNS'|'SQS'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
