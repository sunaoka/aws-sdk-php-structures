<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\UpdateIncidentRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $snsTopicArn
 */
class NotificationTargetItem extends Shape
{
    /**
     * @param array{snsTopicArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
