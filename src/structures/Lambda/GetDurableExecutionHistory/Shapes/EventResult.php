<?php

namespace Sunaoka\Aws\Structures\Lambda\GetDurableExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Payload
 * @property bool|null $Truncated
 */
class EventResult extends Shape
{
    /**
     * @param array{
     *     Payload?: string|null,
     *     Truncated?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
