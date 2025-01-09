<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelQualityJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MonitoringOutput> $MonitoringOutputs
 * @property string $KmsKeyId
 */
class MonitoringOutputConfig extends Shape
{
    /**
     * @param array{
     *     MonitoringOutputs: list<MonitoringOutput>,
     *     KmsKeyId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
