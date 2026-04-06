<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateBudget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $farmId
 * @property string $budgetId
 * @property string|null $displayName
 * @property string|null $description
 * @property 'ACTIVE'|'INACTIVE'|null $status
 * @property float|null $approximateDollarLimit
 * @property list<Shapes\BudgetActionToAdd>|null $actionsToAdd
 * @property list<Shapes\BudgetActionToRemove>|null $actionsToRemove
 * @property Shapes\BudgetSchedule|null $schedule
 */
class UpdateBudgetRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     farmId: string,
     *     budgetId: string,
     *     displayName?: string|null,
     *     description?: string|null,
     *     status?: 'ACTIVE'|'INACTIVE'|null,
     *     approximateDollarLimit?: float|null,
     *     actionsToAdd?: list<Shapes\BudgetActionToAdd>|null,
     *     actionsToRemove?: list<Shapes\BudgetActionToRemove>|null,
     *     schedule?: Shapes\BudgetSchedule|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
