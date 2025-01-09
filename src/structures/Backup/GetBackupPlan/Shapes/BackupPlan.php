<?php

namespace Sunaoka\Aws\Structures\Backup\GetBackupPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BackupPlanName
 * @property list<BackupRule> $Rules
 * @property list<AdvancedBackupSetting> $AdvancedBackupSettings
 */
class BackupPlan extends Shape
{
    /**
     * @param array{
     *     BackupPlanName: string,
     *     Rules: list<BackupRule>,
     *     AdvancedBackupSettings?: list<AdvancedBackupSetting>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
