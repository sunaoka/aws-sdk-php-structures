<?php

namespace Sunaoka\Aws\Structures\CleanRooms\StartProtectedJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CR.1X'|'CR.4X' $type
 * @property int<4, 1024> $number
 * @property WorkerComputeConfigurationProperties|null $properties
 */
class ProtectedJobWorkerComputeConfiguration extends Shape
{
    /**
     * @param array{
     *     type: 'CR.1X'|'CR.4X',
     *     number: int<4, 1024>,
     *     properties?: WorkerComputeConfigurationProperties|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
