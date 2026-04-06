<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetCentralizationRuleForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LogsEncryptionConfiguration|null $LogsEncryptionConfiguration
 * @property LogsBackupConfiguration|null $BackupConfiguration
 * @property LogGroupNameConfiguration|null $LogGroupNameConfiguration
 */
class DestinationLogsConfiguration extends Shape
{
    /**
     * @param array{
     *     LogsEncryptionConfiguration?: LogsEncryptionConfiguration|null,
     *     BackupConfiguration?: LogsBackupConfiguration|null,
     *     LogGroupNameConfiguration?: LogGroupNameConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
