<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\CreateCentralizationRuleForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MetricsBackupConfiguration|null $BackupConfiguration
 */
class DestinationMetricsConfiguration extends Shape
{
    /**
     * @param array{BackupConfiguration?: MetricsBackupConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
