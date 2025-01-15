<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetSignalCatalog\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $totalNodes
 * @property int|null $totalBranches
 * @property int|null $totalSensors
 * @property int|null $totalAttributes
 * @property int|null $totalActuators
 * @property int|null $totalStructs
 * @property int|null $totalProperties
 */
class NodeCounts extends Shape
{
    /**
     * @param array{
     *     totalNodes?: int|null,
     *     totalBranches?: int|null,
     *     totalSensors?: int|null,
     *     totalAttributes?: int|null,
     *     totalActuators?: int|null,
     *     totalStructs?: int|null,
     *     totalProperties?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
