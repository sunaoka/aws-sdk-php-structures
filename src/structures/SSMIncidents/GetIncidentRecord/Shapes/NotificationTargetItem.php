<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\GetIncidentRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $snsTopicArn
 */
class NotificationTargetItem extends Shape
{
    /**
     * @param array{snsTopicArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
