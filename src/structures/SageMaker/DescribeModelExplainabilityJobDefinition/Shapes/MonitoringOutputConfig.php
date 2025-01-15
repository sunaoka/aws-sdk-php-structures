<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelExplainabilityJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MonitoringOutput> $MonitoringOutputs
 * @property string|null $KmsKeyId
 */
class MonitoringOutputConfig extends Shape
{
    /**
     * @param array{
     *     MonitoringOutputs: list<MonitoringOutput>,
     *     KmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
