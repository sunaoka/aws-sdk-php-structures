<?php

namespace Sunaoka\Aws\Structures\Budgets\CreateBudgetAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $BudgetName
 * @property 'ACTUAL'|'FORECASTED' $NotificationType
 * @property 'APPLY_IAM_POLICY'|'APPLY_SCP_POLICY'|'RUN_SSM_DOCUMENTS' $ActionType
 * @property Shapes\ActionThreshold $ActionThreshold
 * @property Shapes\Definition $Definition
 * @property string $ExecutionRoleArn
 * @property 'AUTOMATIC'|'MANUAL' $ApprovalModel
 * @property list<Shapes\Subscriber> $Subscribers
 * @property list<Shapes\ResourceTag>|null $ResourceTags
 */
class CreateBudgetActionRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     BudgetName: string,
     *     NotificationType: 'ACTUAL'|'FORECASTED',
     *     ActionType: 'APPLY_IAM_POLICY'|'APPLY_SCP_POLICY'|'RUN_SSM_DOCUMENTS',
     *     ActionThreshold: Shapes\ActionThreshold,
     *     Definition: Shapes\Definition,
     *     ExecutionRoleArn: string,
     *     ApprovalModel: 'AUTOMATIC'|'MANUAL',
     *     Subscribers: list<Shapes\Subscriber>,
     *     ResourceTags?: list<Shapes\ResourceTag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
