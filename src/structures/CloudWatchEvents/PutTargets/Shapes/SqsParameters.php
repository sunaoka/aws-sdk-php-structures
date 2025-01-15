<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\PutTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MessageGroupId
 */
class SqsParameters extends Shape
{
    /**
     * @param array{MessageGroupId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
