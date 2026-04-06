<?php

namespace Sunaoka\Aws\Structures\Emr\ModifyInstanceFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceFleetId
 * @property int<0, max>|null $TargetOnDemandCapacity
 * @property int<0, max>|null $TargetSpotCapacity
 * @property InstanceFleetResizingSpecifications|null $ResizeSpecifications
 */
class InstanceFleetModifyConfig extends Shape
{
    /**
     * @param array{
     *     InstanceFleetId: string,
     *     TargetOnDemandCapacity?: int<0, max>|null,
     *     TargetSpotCapacity?: int<0, max>|null,
     *     ResizeSpecifications?: InstanceFleetResizingSpecifications|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
