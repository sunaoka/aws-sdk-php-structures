<?php

namespace Sunaoka\Aws\Structures\Budgets\UpdateBudgetAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $BudgetName
 * @property string $ActionId
 * @property 'ACTUAL'|'FORECASTED' $NotificationType
 * @property Shapes\ActionThreshold $ActionThreshold
 * @property Shapes\Definition $Definition
 * @property string $ExecutionRoleArn
 * @property 'AUTOMATIC'|'MANUAL' $ApprovalModel
 * @property list<Shapes\Subscriber> $Subscribers
 */
class UpdateBudgetActionRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     BudgetName: string,
     *     ActionId: string,
     *     NotificationType?: 'ACTUAL'|'FORECASTED',
     *     ActionThreshold?: Shapes\ActionThreshold,
     *     Definition?: Shapes\Definition,
     *     ExecutionRoleArn?: string,
     *     ApprovalModel?: 'AUTOMATIC'|'MANUAL',
     *     Subscribers?: list<Shapes\Subscriber>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
