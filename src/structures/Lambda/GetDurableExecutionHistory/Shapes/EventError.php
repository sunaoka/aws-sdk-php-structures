<?php

namespace Sunaoka\Aws\Structures\Lambda\GetDurableExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ErrorObject|null $Payload
 * @property bool|null $Truncated
 */
class EventError extends Shape
{
    /**
     * @param array{
     *     Payload?: ErrorObject|null,
     *     Truncated?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
