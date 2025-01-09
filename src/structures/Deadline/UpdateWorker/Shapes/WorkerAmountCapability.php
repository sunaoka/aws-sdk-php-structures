<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateWorker\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property float $value
 */
class WorkerAmountCapability extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     value: float
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
