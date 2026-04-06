<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateProtectedJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CR.1X'|'CR.4X' $type
 * @property int<4, 128> $number
 */
class ProtectedJobWorkerComputeConfiguration extends Shape
{
    /**
     * @param array{
     *     type: 'CR.1X'|'CR.4X',
     *     number: int<4, 128>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
