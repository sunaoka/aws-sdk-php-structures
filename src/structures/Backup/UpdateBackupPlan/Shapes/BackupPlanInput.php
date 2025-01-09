<?php

namespace Sunaoka\Aws\Structures\Backup\UpdateBackupPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BackupPlanName
 * @property list<BackupRuleInput> $Rules
 * @property list<AdvancedBackupSetting> $AdvancedBackupSettings
 */
class BackupPlanInput extends Shape
{
    /**
     * @param array{
     *     BackupPlanName: string,
     *     Rules: list<BackupRuleInput>,
     *     AdvancedBackupSettings?: list<AdvancedBackupSetting>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
