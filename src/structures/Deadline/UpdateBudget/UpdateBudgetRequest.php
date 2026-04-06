<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateBudget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\BudgetActionToAdd>|null $actionsToAdd
 * @property list<Shapes\BudgetActionToRemove>|null $actionsToRemove
 * @property float|null $approximateDollarLimit
 * @property string $budgetId
 * @property string|null $clientToken
 * @property string|null $description
 * @property string|null $displayName
 * @property string $farmId
 * @property Shapes\BudgetSchedule|null $schedule
 * @property 'ACTIVE'|'INACTIVE'|null $status
 */
class UpdateBudgetRequest extends Request
{
    /**
     * @param array{
     *     actionsToAdd?: list<Shapes\BudgetActionToAdd>|null,
     *     actionsToRemove?: list<Shapes\BudgetActionToRemove>|null,
     *     approximateDollarLimit?: float|null,
     *     budgetId: string,
     *     clientToken?: string|null,
     *     description?: string|null,
     *     displayName?: string|null,
     *     farmId: string,
     *     schedule?: Shapes\BudgetSchedule|null,
     *     status?: 'ACTIVE'|'INACTIVE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
