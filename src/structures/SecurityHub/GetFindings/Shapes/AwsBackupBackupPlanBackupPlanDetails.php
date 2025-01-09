<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BackupPlanName
 * @property list<AwsBackupBackupPlanAdvancedBackupSettingsDetails> $AdvancedBackupSettings
 * @property list<AwsBackupBackupPlanRuleDetails> $BackupPlanRule
 */
class AwsBackupBackupPlanBackupPlanDetails extends Shape
{
    /**
     * @param array{
     *     BackupPlanName?: string,
     *     AdvancedBackupSettings?: list<AwsBackupBackupPlanAdvancedBackupSettingsDetails>,
     *     BackupPlanRule?: list<AwsBackupBackupPlanRuleDetails>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
