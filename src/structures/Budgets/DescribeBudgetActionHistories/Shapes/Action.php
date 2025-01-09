<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeBudgetActionHistories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ActionId
 * @property string $BudgetName
 * @property 'ACTUAL'|'FORECASTED' $NotificationType
 * @property 'APPLY_IAM_POLICY'|'APPLY_SCP_POLICY'|'RUN_SSM_DOCUMENTS' $ActionType
 * @property ActionThreshold $ActionThreshold
 * @property Definition $Definition
 * @property string $ExecutionRoleArn
 * @property 'AUTOMATIC'|'MANUAL' $ApprovalModel
 * @property 'STANDBY'|'PENDING'|'EXECUTION_IN_PROGRESS'|'EXECUTION_SUCCESS'|'EXECUTION_FAILURE'|'REVERSE_IN_PROGRESS'|'REVERSE_SUCCESS'|'REVERSE_FAILURE'|'RESET_IN_PROGRESS'|'RESET_FAILURE' $Status
 * @property list<Subscriber> $Subscribers
 */
class Action extends Shape
{
    /**
     * @param array{
     *     ActionId: string,
     *     BudgetName: string,
     *     NotificationType: 'ACTUAL'|'FORECASTED',
     *     ActionType: 'APPLY_IAM_POLICY'|'APPLY_SCP_POLICY'|'RUN_SSM_DOCUMENTS',
     *     ActionThreshold: ActionThreshold,
     *     Definition: Definition,
     *     ExecutionRoleArn: string,
     *     ApprovalModel: 'AUTOMATIC'|'MANUAL',
     *     Status: 'STANDBY'|'PENDING'|'EXECUTION_IN_PROGRESS'|'EXECUTION_SUCCESS'|'EXECUTION_FAILURE'|'REVERSE_IN_PROGRESS'|'REVERSE_SUCCESS'|'REVERSE_FAILURE'|'RESET_IN_PROGRESS'|'RESET_FAILURE',
     *     Subscribers: list<Subscriber>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
