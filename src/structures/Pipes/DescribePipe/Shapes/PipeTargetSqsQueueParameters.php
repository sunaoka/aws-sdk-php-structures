<?php

namespace Sunaoka\Aws\Structures\Pipes\DescribePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MessageDeduplicationId
 * @property string|null $MessageGroupId
 */
class PipeTargetSqsQueueParameters extends Shape
{
    /**
     * @param array{
     *     MessageDeduplicationId?: string|null,
     *     MessageGroupId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
