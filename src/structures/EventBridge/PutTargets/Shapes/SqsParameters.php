<?php

namespace Sunaoka\Aws\Structures\EventBridge\PutTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MessageGroupId
 */
class SqsParameters extends Shape
{
    /**
     * @param array{MessageGroupId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
