<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetCollaborationPrivacyBudgetTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CALENDAR_DAY'|'CALENDAR_MONTH'|'CALENDAR_WEEK'|'LIFETIME' $type
 * @property int<0, 1000000> $budget
 * @property 'ENABLED'|'DISABLED'|null $autoRefresh
 */
class BudgetParameter extends Shape
{
    /**
     * @param array{
     *     type: 'CALENDAR_DAY'|'CALENDAR_MONTH'|'CALENDAR_WEEK'|'LIFETIME',
     *     budget: int<0, 1000000>,
     *     autoRefresh?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
