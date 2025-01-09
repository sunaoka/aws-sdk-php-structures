<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeDataQualityJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EndpointInput $EndpointInput
 * @property BatchTransformInput $BatchTransformInput
 */
class DataQualityJobInput extends Shape
{
    /**
     * @param array{
     *     EndpointInput?: EndpointInput,
     *     BatchTransformInput?: BatchTransformInput
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
