<?php

namespace Sunaoka\Aws\Structures\CleanRooms\StartProtectedQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CR.1X'|'CR.4X' $type
 * @property int<2, 400> $number
 */
class WorkerComputeConfiguration extends Shape
{
    /**
     * @param array{
     *     type?: 'CR.1X'|'CR.4X',
     *     number?: int<2, 400>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
