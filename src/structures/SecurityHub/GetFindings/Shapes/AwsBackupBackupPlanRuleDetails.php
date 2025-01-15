<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TargetBackupVault
 * @property int|null $StartWindowMinutes
 * @property string|null $ScheduleExpression
 * @property string|null $RuleName
 * @property string|null $RuleId
 * @property bool|null $EnableContinuousBackup
 * @property int|null $CompletionWindowMinutes
 * @property list<AwsBackupBackupPlanRuleCopyActionsDetails>|null $CopyActions
 * @property AwsBackupBackupPlanLifecycleDetails|null $Lifecycle
 */
class AwsBackupBackupPlanRuleDetails extends Shape
{
    /**
     * @param array{
     *     TargetBackupVault?: string|null,
     *     StartWindowMinutes?: int|null,
     *     ScheduleExpression?: string|null,
     *     RuleName?: string|null,
     *     RuleId?: string|null,
     *     EnableContinuousBackup?: bool|null,
     *     CompletionWindowMinutes?: int|null,
     *     CopyActions?: list<AwsBackupBackupPlanRuleCopyActionsDetails>|null,
     *     Lifecycle?: AwsBackupBackupPlanLifecycleDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
