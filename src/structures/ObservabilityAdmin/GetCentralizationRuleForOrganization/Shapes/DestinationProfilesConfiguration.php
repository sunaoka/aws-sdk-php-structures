<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetCentralizationRuleForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProfilesBackupConfiguration|null $BackupConfiguration
 */
class DestinationProfilesConfiguration extends Shape
{
    /**
     * @param array{BackupConfiguration?: ProfilesBackupConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
