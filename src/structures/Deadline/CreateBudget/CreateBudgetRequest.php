<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateBudget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $farmId
 * @property Shapes\UsageTrackingResource $usageTrackingResource
 * @property string $displayName
 * @property string $description
 * @property float $approximateDollarLimit
 * @property list<Shapes\BudgetActionToAdd> $actions
 * @property Shapes\BudgetSchedule $schedule
 */
class CreateBudgetRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     farmId: string,
     *     usageTrackingResource: Shapes\UsageTrackingResource,
     *     displayName: string,
     *     description?: string,
     *     approximateDollarLimit: float,
     *     actions: list<Shapes\BudgetActionToAdd>,
     *     schedule: Shapes\BudgetSchedule
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
