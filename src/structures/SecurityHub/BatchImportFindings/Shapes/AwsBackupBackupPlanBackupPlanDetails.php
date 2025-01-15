<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BackupPlanName
 * @property list<AwsBackupBackupPlanAdvancedBackupSettingsDetails>|null $AdvancedBackupSettings
 * @property list<AwsBackupBackupPlanRuleDetails>|null $BackupPlanRule
 */
class AwsBackupBackupPlanBackupPlanDetails extends Shape
{
    /**
     * @param array{
     *     BackupPlanName?: string|null,
     *     AdvancedBackupSettings?: list<AwsBackupBackupPlanAdvancedBackupSettingsDetails>|null,
     *     BackupPlanRule?: list<AwsBackupBackupPlanRuleDetails>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
