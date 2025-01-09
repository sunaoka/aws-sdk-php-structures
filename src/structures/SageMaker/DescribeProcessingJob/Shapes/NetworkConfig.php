<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeProcessingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EnableInterContainerTrafficEncryption
 * @property bool $EnableNetworkIsolation
 * @property VpcConfig $VpcConfig
 */
class NetworkConfig extends Shape
{
    /**
     * @param array{
     *     EnableInterContainerTrafficEncryption?: bool,
     *     EnableNetworkIsolation?: bool,
     *     VpcConfig?: VpcConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
