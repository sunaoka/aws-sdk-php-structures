<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateDataQualityJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EndpointInput|null $EndpointInput
 * @property BatchTransformInput|null $BatchTransformInput
 */
class DataQualityJobInput extends Shape
{
    /**
     * @param array{
     *     EndpointInput?: EndpointInput|null,
     *     BatchTransformInput?: BatchTransformInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
