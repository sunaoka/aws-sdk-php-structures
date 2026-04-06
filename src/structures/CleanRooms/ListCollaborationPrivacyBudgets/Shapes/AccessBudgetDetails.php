<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListCollaborationPrivacyBudgets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property int<0, max> $remainingBudget
 * @property int<0, 1000000> $budget
 * @property 'CALENDAR_DAY'|'CALENDAR_MONTH'|'CALENDAR_WEEK'|'LIFETIME' $budgetType
 * @property 'ENABLED'|'DISABLED'|null $autoRefresh
 */
class AccessBudgetDetails extends Shape
{
    /**
     * @param array{
     *     startTime: \Aws\Api\DateTimeResult,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     remainingBudget: int<0, max>,
     *     budget: int<0, 1000000>,
     *     budgetType: 'CALENDAR_DAY'|'CALENDAR_MONTH'|'CALENDAR_WEEK'|'LIFETIME',
     *     autoRefresh?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
