<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AutoGenerateEndpointName
 * @property string|null $EndpointName
 */
class ModelDeployConfig extends Shape
{
    /**
     * @param array{
     *     AutoGenerateEndpointName?: bool|null,
     *     EndpointName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
