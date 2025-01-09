<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelBiasJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EndpointInput $EndpointInput
 * @property BatchTransformInput $BatchTransformInput
 * @property MonitoringGroundTruthS3Input $GroundTruthS3Input
 */
class ModelBiasJobInput extends Shape
{
    /**
     * @param array{
     *     EndpointInput?: EndpointInput,
     *     BatchTransformInput?: BatchTransformInput,
     *     GroundTruthS3Input: MonitoringGroundTruthS3Input
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
