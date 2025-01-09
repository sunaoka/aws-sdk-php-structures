<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListPrivacyBudgets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DifferentialPrivacyPrivacyBudgetAggregation> $aggregations
 * @property int<1, 20> $epsilon
 */
class DifferentialPrivacyPrivacyBudget extends Shape
{
    /**
     * @param array{
     *     aggregations: list<DifferentialPrivacyPrivacyBudgetAggregation>,
     *     epsilon: int<1, 20>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
