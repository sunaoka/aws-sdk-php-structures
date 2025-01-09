<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetMLInputChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CR.1X'|'CR.4X' $type
 * @property int $number
 */
class WorkerComputeConfiguration extends Shape
{
    /**
     * @param array{
     *     type?: 'CR.1X'|'CR.4X',
     *     number?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
