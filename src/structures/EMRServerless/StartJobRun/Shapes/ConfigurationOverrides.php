<?php

namespace Sunaoka\Aws\Structures\EMRServerless\StartJobRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Configuration>|null $applicationConfiguration
 * @property MonitoringConfiguration|null $monitoringConfiguration
 * @property DiskEncryptionConfiguration|null $diskEncryptionConfiguration
 */
class ConfigurationOverrides extends Shape
{
    /**
     * @param array{
     *     applicationConfiguration?: list<Configuration>|null,
     *     monitoringConfiguration?: MonitoringConfiguration|null,
     *     diskEncryptionConfiguration?: DiskEncryptionConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
