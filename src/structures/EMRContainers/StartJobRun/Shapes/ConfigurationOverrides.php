<?php

namespace Sunaoka\Aws\Structures\EMRContainers\StartJobRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Configuration>|null $applicationConfiguration
 * @property MonitoringConfiguration|null $monitoringConfiguration
 */
class ConfigurationOverrides extends Shape
{
    /**
     * @param array{
     *     applicationConfiguration?: list<Configuration>|null,
     *     monitoringConfiguration?: MonitoringConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
