<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListAppImageConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AppImageConfigArn
 * @property string|null $AppImageConfigName
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property KernelGatewayImageConfig|null $KernelGatewayImageConfig
 */
class AppImageConfigDetails extends Shape
{
    /**
     * @param array{
     *     AppImageConfigArn?: string|null,
     *     AppImageConfigName?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     KernelGatewayImageConfig?: KernelGatewayImageConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
