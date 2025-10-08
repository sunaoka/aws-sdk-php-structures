<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\UpdateCentralizationRuleForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LogsEncryptionConfiguration|null $LogsEncryptionConfiguration
 * @property LogsBackupConfiguration|null $BackupConfiguration
 */
class DestinationLogsConfiguration extends Shape
{
    /**
     * @param array{
     *     LogsEncryptionConfiguration?: LogsEncryptionConfiguration|null,
     *     BackupConfiguration?: LogsBackupConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
