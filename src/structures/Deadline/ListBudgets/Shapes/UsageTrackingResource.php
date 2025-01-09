<?php

namespace Sunaoka\Aws\Structures\Deadline\ListBudgets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $queueId
 */
class UsageTrackingResource extends Shape
{
    /**
     * @param array{queueId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
