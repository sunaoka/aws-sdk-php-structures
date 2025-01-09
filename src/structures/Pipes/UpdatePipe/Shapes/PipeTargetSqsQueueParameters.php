<?php

namespace Sunaoka\Aws\Structures\Pipes\UpdatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MessageGroupId
 * @property string $MessageDeduplicationId
 */
class PipeTargetSqsQueueParameters extends Shape
{
    /**
     * @param array{
     *     MessageGroupId?: string,
     *     MessageDeduplicationId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
