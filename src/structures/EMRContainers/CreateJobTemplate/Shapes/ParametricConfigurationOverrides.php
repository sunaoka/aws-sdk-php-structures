<?php

namespace Sunaoka\Aws\Structures\EMRContainers\CreateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Configuration> $applicationConfiguration
 * @property ParametricMonitoringConfiguration $monitoringConfiguration
 */
class ParametricConfigurationOverrides extends Shape
{
    /**
     * @param array{
     *     applicationConfiguration?: list<Configuration>,
     *     monitoringConfiguration?: ParametricMonitoringConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
