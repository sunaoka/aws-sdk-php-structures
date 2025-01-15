<?php

namespace Sunaoka\Aws\Structures\EMRContainers\DescribeJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Configuration>|null $applicationConfiguration
 * @property ParametricMonitoringConfiguration|null $monitoringConfiguration
 */
class ParametricConfigurationOverrides extends Shape
{
    /**
     * @param array{
     *     applicationConfiguration?: list<Configuration>|null,
     *     monitoringConfiguration?: ParametricMonitoringConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
