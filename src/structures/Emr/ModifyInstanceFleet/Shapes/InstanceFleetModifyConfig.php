<?php

namespace Sunaoka\Aws\Structures\Emr\ModifyInstanceFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceFleetId
 * @property int $TargetOnDemandCapacity
 * @property int $TargetSpotCapacity
 * @property InstanceFleetResizingSpecifications $ResizeSpecifications
 * @property list<InstanceTypeConfig> $InstanceTypeConfigs
 * @property string $Context
 */
class InstanceFleetModifyConfig extends Shape
{
    /**
     * @param array{
     *     InstanceFleetId: string,
     *     TargetOnDemandCapacity?: int,
     *     TargetSpotCapacity?: int,
     *     ResizeSpecifications?: InstanceFleetResizingSpecifications,
     *     InstanceTypeConfigs?: list<InstanceTypeConfig>,
     *     Context?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
