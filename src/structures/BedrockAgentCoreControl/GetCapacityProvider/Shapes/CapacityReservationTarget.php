<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $capacityReservationId
 * @property string|null $capacityReservationResourceGroupArn
 */
class CapacityReservationTarget extends Shape
{
    /**
     * @param array{
     *     capacityReservationId?: string|null,
     *     capacityReservationResourceGroupArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
