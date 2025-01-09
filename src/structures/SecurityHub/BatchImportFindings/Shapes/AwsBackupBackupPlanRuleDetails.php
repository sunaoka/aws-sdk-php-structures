<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TargetBackupVault
 * @property int $StartWindowMinutes
 * @property string $ScheduleExpression
 * @property string $RuleName
 * @property string $RuleId
 * @property bool $EnableContinuousBackup
 * @property int $CompletionWindowMinutes
 * @property list<AwsBackupBackupPlanRuleCopyActionsDetails> $CopyActions
 * @property AwsBackupBackupPlanLifecycleDetails $Lifecycle
 */
class AwsBackupBackupPlanRuleDetails extends Shape
{
    /**
     * @param array{
     *     TargetBackupVault?: string,
     *     StartWindowMinutes?: int,
     *     ScheduleExpression?: string,
     *     RuleName?: string,
     *     RuleId?: string,
     *     EnableContinuousBackup?: bool,
     *     CompletionWindowMinutes?: int,
     *     CopyActions?: list<AwsBackupBackupPlanRuleCopyActionsDetails>,
     *     Lifecycle?: AwsBackupBackupPlanLifecycleDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
