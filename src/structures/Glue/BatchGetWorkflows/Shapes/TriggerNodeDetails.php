<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetWorkflows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Trigger $Trigger
 */
class TriggerNodeDetails extends Shape
{
    /**
     * @param array{Trigger?: Trigger} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
