<?php

namespace Sunaoka\Aws\Structures\EMRContainers\StartJobRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Configuration> $applicationConfiguration
 * @property MonitoringConfiguration $monitoringConfiguration
 */
class ConfigurationOverrides extends Shape
{
    /**
     * @param array{
     *     applicationConfiguration?: list<Configuration>,
     *     monitoringConfiguration?: MonitoringConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
