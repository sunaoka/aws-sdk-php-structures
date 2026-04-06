<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateBudget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\BudgetActionToAdd> $actions
 * @property float $approximateDollarLimit
 * @property string|null $clientToken
 * @property string|null $description
 * @property string $displayName
 * @property string $farmId
 * @property Shapes\BudgetSchedule $schedule
 * @property Shapes\UsageTrackingResource $usageTrackingResource
 */
class CreateBudgetRequest extends Request
{
    /**
     * @param array{
     *     actions: list<Shapes\BudgetActionToAdd>,
     *     approximateDollarLimit: float,
     *     clientToken?: string|null,
     *     description?: string|null,
     *     displayName: string,
     *     farmId: string,
     *     schedule: Shapes\BudgetSchedule,
     *     usageTrackingResource: Shapes\UsageTrackingResource
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
