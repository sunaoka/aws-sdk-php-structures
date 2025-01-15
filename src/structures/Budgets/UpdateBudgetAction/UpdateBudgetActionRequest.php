<?php

namespace Sunaoka\Aws\Structures\Budgets\UpdateBudgetAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $BudgetName
 * @property string $ActionId
 * @property 'ACTUAL'|'FORECASTED'|null $NotificationType
 * @property Shapes\ActionThreshold|null $ActionThreshold
 * @property Shapes\Definition|null $Definition
 * @property string|null $ExecutionRoleArn
 * @property 'AUTOMATIC'|'MANUAL'|null $ApprovalModel
 * @property list<Shapes\Subscriber>|null $Subscribers
 */
class UpdateBudgetActionRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     BudgetName: string,
     *     ActionId: string,
     *     NotificationType?: 'ACTUAL'|'FORECASTED'|null,
     *     ActionThreshold?: Shapes\ActionThreshold|null,
     *     Definition?: Shapes\Definition|null,
     *     ExecutionRoleArn?: string|null,
     *     ApprovalModel?: 'AUTOMATIC'|'MANUAL'|null,
     *     Subscribers?: list<Shapes\Subscriber>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
