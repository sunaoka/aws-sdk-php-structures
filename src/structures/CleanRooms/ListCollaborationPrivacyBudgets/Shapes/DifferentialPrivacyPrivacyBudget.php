<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListCollaborationPrivacyBudgets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DifferentialPrivacyPrivacyBudgetAggregation> $aggregations
 * @property int $epsilon
 */
class DifferentialPrivacyPrivacyBudget extends Shape
{
    /**
     * @param array{
     *     aggregations: list<DifferentialPrivacyPrivacyBudgetAggregation>,
     *     epsilon: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
