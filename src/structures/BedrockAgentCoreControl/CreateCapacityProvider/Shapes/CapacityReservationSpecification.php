<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'capacity-reservations-only'|'open'|'none'|null $capacityReservationPreference
 * @property CapacityReservationTarget|null $capacityReservationTarget
 */
class CapacityReservationSpecification extends Shape
{
    /**
     * @param array{
     *     capacityReservationPreference?: 'capacity-reservations-only'|'open'|'none'|null,
     *     capacityReservationTarget?: CapacityReservationTarget|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
