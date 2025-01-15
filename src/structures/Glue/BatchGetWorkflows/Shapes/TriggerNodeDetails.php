<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetWorkflows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Trigger|null $Trigger
 */
class TriggerNodeDetails extends Shape
{
    /**
     * @param array{Trigger?: Trigger|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
