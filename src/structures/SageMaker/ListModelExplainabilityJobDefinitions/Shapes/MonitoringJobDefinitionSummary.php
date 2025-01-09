<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListModelExplainabilityJobDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MonitoringJobDefinitionName
 * @property string $MonitoringJobDefinitionArn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $EndpointName
 */
class MonitoringJobDefinitionSummary extends Shape
{
    /**
     * @param array{
     *     MonitoringJobDefinitionName: string,
     *     MonitoringJobDefinitionArn: string,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     EndpointName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
