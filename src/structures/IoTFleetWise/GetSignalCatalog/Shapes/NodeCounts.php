<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetSignalCatalog\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $totalNodes
 * @property int $totalBranches
 * @property int $totalSensors
 * @property int $totalAttributes
 * @property int $totalActuators
 * @property int $totalStructs
 * @property int $totalProperties
 */
class NodeCounts extends Shape
{
    /**
     * @param array{
     *     totalNodes?: int,
     *     totalBranches?: int,
     *     totalSensors?: int,
     *     totalAttributes?: int,
     *     totalActuators?: int,
     *     totalStructs?: int,
     *     totalProperties?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
