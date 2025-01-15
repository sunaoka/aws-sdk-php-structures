<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MessageGroupId
 * @property string|null $MessageDeduplicationId
 */
class PipeTargetSqsQueueParameters extends Shape
{
    /**
     * @param array{
     *     MessageGroupId?: string|null,
     *     MessageDeduplicationId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
