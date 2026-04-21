<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAIRecommendationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'capacity-reservations-only'|null $CapacityReservationPreference
 * @property list<string>|null $MlReservationArns
 */
class AICapacityReservationConfig extends Shape
{
    /**
     * @param array{
     *     CapacityReservationPreference?: 'capacity-reservations-only'|null,
     *     MlReservationArns?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
