<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModelQualityJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EnableInterContainerTrafficEncryption
 * @property bool $EnableNetworkIsolation
 * @property VpcConfig $VpcConfig
 */
class MonitoringNetworkConfig extends Shape
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
