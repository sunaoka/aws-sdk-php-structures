<?php

namespace Sunaoka\Aws\Structures\Backup\UpdateBackupPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleName
 * @property string $TargetBackupVaultName
 * @property string|null $ScheduleExpression
 * @property int|null $StartWindowMinutes
 * @property int|null $CompletionWindowMinutes
 * @property Lifecycle|null $Lifecycle
 * @property array<string, string>|null $RecoveryPointTags
 * @property list<CopyAction>|null $CopyActions
 * @property bool|null $EnableContinuousBackup
 * @property string|null $ScheduleExpressionTimezone
 */
class BackupRuleInput extends Shape
{
    /**
     * @param array{
     *     RuleName: string,
     *     TargetBackupVaultName: string,
     *     ScheduleExpression?: string|null,
     *     StartWindowMinutes?: int|null,
     *     CompletionWindowMinutes?: int|null,
     *     Lifecycle?: Lifecycle|null,
     *     RecoveryPointTags?: array<string, string>|null,
     *     CopyActions?: list<CopyAction>|null,
     *     EnableContinuousBackup?: bool|null,
     *     ScheduleExpressionTimezone?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
