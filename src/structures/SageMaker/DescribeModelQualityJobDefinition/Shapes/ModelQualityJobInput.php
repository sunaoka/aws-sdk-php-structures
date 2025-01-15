<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelQualityJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EndpointInput|null $EndpointInput
 * @property BatchTransformInput|null $BatchTransformInput
 * @property MonitoringGroundTruthS3Input $GroundTruthS3Input
 */
class ModelQualityJobInput extends Shape
{
    /**
     * @param array{
     *     EndpointInput?: EndpointInput|null,
     *     BatchTransformInput?: BatchTransformInput|null,
     *     GroundTruthS3Input: MonitoringGroundTruthS3Input
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
