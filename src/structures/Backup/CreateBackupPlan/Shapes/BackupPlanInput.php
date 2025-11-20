<?php

namespace Sunaoka\Aws\Structures\Backup\CreateBackupPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BackupPlanName
 * @property list<BackupRuleInput> $Rules
 * @property list<AdvancedBackupSetting>|null $AdvancedBackupSettings
 * @property list<ScanSetting>|null $ScanSettings
 */
class BackupPlanInput extends Shape
{
    /**
     * @param array{
     *     BackupPlanName: string,
     *     Rules: list<BackupRuleInput>,
     *     AdvancedBackupSettings?: list<AdvancedBackupSetting>|null,
     *     ScanSettings?: list<ScanSetting>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
