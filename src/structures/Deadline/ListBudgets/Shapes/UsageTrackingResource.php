<?php

namespace Sunaoka\Aws\Structures\Deadline\ListBudgets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $queueId
 */
class UsageTrackingResource extends Shape
{
    /**
     * @param array{queueId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
