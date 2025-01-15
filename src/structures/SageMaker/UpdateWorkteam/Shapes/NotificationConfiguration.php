<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateWorkteam\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NotificationTopicArn
 */
class NotificationConfiguration extends Shape
{
    /**
     * @param array{NotificationTopicArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
