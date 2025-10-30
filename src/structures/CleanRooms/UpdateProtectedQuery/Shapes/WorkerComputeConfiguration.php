<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateProtectedQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CR.1X'|'CR.4X'|null $type
 * @property int<2, 400>|null $number
 * @property WorkerComputeConfigurationProperties|null $properties
 */
class WorkerComputeConfiguration extends Shape
{
    /**
     * @param array{
     *     type?: 'CR.1X'|'CR.4X'|null,
     *     number?: int<2, 400>|null,
     *     properties?: WorkerComputeConfigurationProperties|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
