<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateBudget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $farmId
 * @property string $budgetId
 * @property string $displayName
 * @property string $description
 * @property 'ACTIVE'|'INACTIVE' $status
 * @property float $approximateDollarLimit
 * @property list<Shapes\BudgetActionToAdd> $actionsToAdd
 * @property list<Shapes\BudgetActionToRemove> $actionsToRemove
 * @property Shapes\BudgetSchedule $schedule
 */
class UpdateBudgetRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     farmId: string,
     *     budgetId: string,
     *     displayName?: string,
     *     description?: string,
     *     status?: 'ACTIVE'|'INACTIVE',
     *     approximateDollarLimit?: float,
     *     actionsToAdd?: list<Shapes\BudgetActionToAdd>,
     *     actionsToRemove?: list<Shapes\BudgetActionToRemove>,
     *     schedule?: Shapes\BudgetSchedule
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
