<?php

namespace Sunaoka\Aws\Structures\Backup\GetBackupPlanFromJSON\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleName
 * @property string $TargetBackupVaultName
 * @property string $ScheduleExpression
 * @property int $StartWindowMinutes
 * @property int $CompletionWindowMinutes
 * @property Lifecycle $Lifecycle
 * @property array<string, string> $RecoveryPointTags
 * @property string $RuleId
 * @property list<CopyAction> $CopyActions
 * @property bool $EnableContinuousBackup
 * @property string $ScheduleExpressionTimezone
 * @property list<IndexAction> $IndexActions
 */
class BackupRule extends Shape
{
    /**
     * @param array{
     *     RuleName: string,
     *     TargetBackupVaultName: string,
     *     ScheduleExpression?: string,
     *     StartWindowMinutes?: int,
     *     CompletionWindowMinutes?: int,
     *     Lifecycle?: Lifecycle,
     *     RecoveryPointTags?: array<string, string>,
     *     RuleId?: string,
     *     CopyActions?: list<CopyAction>,
     *     EnableContinuousBackup?: bool,
     *     ScheduleExpressionTimezone?: string,
     *     IndexActions?: list<IndexAction>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
