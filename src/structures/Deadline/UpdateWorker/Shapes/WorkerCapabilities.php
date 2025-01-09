<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateWorker\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<WorkerAmountCapability> $amounts
 * @property list<WorkerAttributeCapability> $attributes
 */
class WorkerCapabilities extends Shape
{
    /**
     * @param array{
     *     amounts: list<WorkerAmountCapability>,
     *     attributes: list<WorkerAttributeCapability>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
