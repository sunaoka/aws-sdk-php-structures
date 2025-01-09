<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJobV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AutoGenerateEndpointName
 * @property string $EndpointName
 */
class ModelDeployConfig extends Shape
{
    /**
     * @param array{
     *     AutoGenerateEndpointName?: bool,
     *     EndpointName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
