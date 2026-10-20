<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\UpdateCentralizationRuleForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LogsEncryptionConfiguration|null $LogsEncryptionConfiguration
 * @property LogsBackupConfiguration|null $BackupConfiguration
 * @property LogGroupNameConfiguration|null $LogGroupNameConfiguration
 * @property TagPropagationConfiguration|null $TagPropagationConfiguration
 * @property 'ENABLED'|null $LogGroupDeletionProtection
 */
class DestinationLogsConfiguration extends Shape
{
    /**
     * @param array{
     *     LogsEncryptionConfiguration?: LogsEncryptionConfiguration|null,
     *     BackupConfiguration?: LogsBackupConfiguration|null,
     *     LogGroupNameConfiguration?: LogGroupNameConfiguration|null,
     *     TagPropagationConfiguration?: TagPropagationConfiguration|null,
     *     LogGroupDeletionProtection?: 'ENABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
