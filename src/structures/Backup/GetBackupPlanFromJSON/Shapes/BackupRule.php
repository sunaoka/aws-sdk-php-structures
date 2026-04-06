<?php

namespace Sunaoka\Aws\Structures\Backup\GetBackupPlanFromJSON\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleName
 * @property string $TargetBackupVaultName
 * @property string|null $ScheduleExpression
 * @property int|null $StartWindowMinutes
 * @property int|null $CompletionWindowMinutes
 * @property Lifecycle|null $Lifecycle
 * @property array<string, string>|null $RecoveryPointTags
 * @property string|null $RuleId
 * @property list<CopyAction>|null $CopyActions
 * @property bool|null $EnableContinuousBackup
 */
class BackupRule extends Shape
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
     *     RuleId?: string|null,
     *     CopyActions?: list<CopyAction>|null,
     *     EnableContinuousBackup?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
