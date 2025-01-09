<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelQualityJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MonitoringClusterConfig $ClusterConfig
 */
class MonitoringResources extends Shape
{
    /**
     * @param array{ClusterConfig: MonitoringClusterConfig} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
