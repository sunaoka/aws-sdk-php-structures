<?php

namespace Sunaoka\Aws\Structures\Ec2\MoveCapacityReservationInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceCapacityReservationId
 * @property 'adhoc'|null $InterruptionType
 */
class InterruptionInfo extends Shape
{
    /**
     * @param array{
     *     SourceCapacityReservationId?: string|null,
     *     InterruptionType?: 'adhoc'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
