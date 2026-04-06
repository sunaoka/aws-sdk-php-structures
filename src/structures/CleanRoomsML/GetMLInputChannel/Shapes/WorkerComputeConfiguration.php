<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetMLInputChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CR.1X'|'CR.4X'|null $type
 * @property int<2, 400>|null $number
 */
class WorkerComputeConfiguration extends Shape
{
    /**
     * @param array{
     *     type?: 'CR.1X'|'CR.4X'|null,
     *     number?: int<2, 400>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
