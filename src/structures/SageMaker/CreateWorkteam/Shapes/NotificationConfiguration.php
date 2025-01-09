<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateWorkteam\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NotificationTopicArn
 */
class NotificationConfiguration extends Shape
{
    /**
     * @param array{NotificationTopicArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
