<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateBudget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $displayName
 * @property string|null $description
 * @property string|null $clientToken
 * @property Shapes\UsageTrackingResource $usageTrackingResource
 * @property float $approximateDollarLimit
 * @property list<Shapes\BudgetActionToAdd> $actions
 * @property Shapes\BudgetSchedule $schedule
 * @property array<string, string>|null $tags
 */
class CreateBudgetRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     displayName: string,
     *     description?: string|null,
     *     clientToken?: string|null,
     *     usageTrackingResource: Shapes\UsageTrackingResource,
     *     approximateDollarLimit: float,
     *     actions: list<Shapes\BudgetActionToAdd>,
     *     schedule: Shapes\BudgetSchedule,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
