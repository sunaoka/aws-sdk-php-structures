<?php

namespace Sunaoka\Aws\Structures\Lambda\CheckpointDurableExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CallbackId
 * @property string|null $Result
 * @property ErrorObject|null $Error
 */
class CallbackDetails extends Shape
{
    /**
     * @param array{
     *     CallbackId?: string|null,
     *     Result?: string|null,
     *     Error?: ErrorObject|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
