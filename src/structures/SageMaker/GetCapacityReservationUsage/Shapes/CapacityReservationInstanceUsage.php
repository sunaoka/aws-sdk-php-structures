<?php

namespace Sunaoka\Aws\Structures\SageMaker\GetCapacityReservationUsage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property int<0, max> $InUseInstanceCount
 * @property list<CapacityReservationResourceUsage> $ResourcesUsage
 */
class CapacityReservationInstanceUsage extends Shape
{
    /**
     * @param array{
     *     AccountId: string,
     *     InUseInstanceCount: int<0, max>,
     *     ResourcesUsage: list<CapacityReservationResourceUsage>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
