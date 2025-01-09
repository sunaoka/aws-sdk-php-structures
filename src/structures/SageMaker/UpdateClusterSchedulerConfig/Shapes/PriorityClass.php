<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateClusterSchedulerConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property int $Weight
 */
class PriorityClass extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Weight: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
