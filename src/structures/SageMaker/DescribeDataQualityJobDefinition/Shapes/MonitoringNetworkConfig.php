<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeDataQualityJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $EnableInterContainerTrafficEncryption
 * @property bool|null $EnableNetworkIsolation
 * @property VpcConfig|null $VpcConfig
 */
class MonitoringNetworkConfig extends Shape
{
    /**
     * @param array{
     *     EnableInterContainerTrafficEncryption?: bool|null,
     *     EnableNetworkIsolation?: bool|null,
     *     VpcConfig?: VpcConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
