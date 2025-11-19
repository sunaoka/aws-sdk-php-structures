<?php

namespace Sunaoka\Aws\Structures\Backup\CreateBackupPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleName
 * @property string $TargetBackupVaultName
 * @property string|null $TargetLogicallyAirGappedBackupVaultArn
 * @property string|null $ScheduleExpression
 * @property int|null $StartWindowMinutes
 * @property int|null $CompletionWindowMinutes
 * @property Lifecycle|null $Lifecycle
 * @property array<string, string>|null $RecoveryPointTags
 * @property list<CopyAction>|null $CopyActions
 * @property bool|null $EnableContinuousBackup
 * @property string|null $ScheduleExpressionTimezone
 * @property list<IndexAction>|null $IndexActions
 */
class BackupRuleInput extends Shape
{
    /**
     * @param array{
     *     RuleName: string,
     *     TargetBackupVaultName: string,
     *     TargetLogicallyAirGappedBackupVaultArn?: string|null,
     *     ScheduleExpression?: string|null,
     *     StartWindowMinutes?: int|null,
     *     CompletionWindowMinutes?: int|null,
     *     Lifecycle?: Lifecycle|null,
     *     RecoveryPointTags?: array<string, string>|null,
     *     CopyActions?: list<CopyAction>|null,
     *     EnableContinuousBackup?: bool|null,
     *     ScheduleExpressionTimezone?: string|null,
     *     IndexActions?: list<IndexAction>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
