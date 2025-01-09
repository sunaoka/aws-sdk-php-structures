<?php

namespace Sunaoka\Aws\Structures\Emr\ModifyInstanceFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceFleetId
 * @property int<0, max> $TargetOnDemandCapacity
 * @property int<0, max> $TargetSpotCapacity
 * @property InstanceFleetResizingSpecifications $ResizeSpecifications
 * @property list<InstanceTypeConfig> $InstanceTypeConfigs
 * @property string $Context
 */
class InstanceFleetModifyConfig extends Shape
{
    /**
     * @param array{
     *     InstanceFleetId: string,
     *     TargetOnDemandCapacity?: int<0, max>,
     *     TargetSpotCapacity?: int<0, max>,
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
