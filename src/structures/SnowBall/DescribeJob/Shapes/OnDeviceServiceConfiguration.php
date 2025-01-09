<?php

namespace Sunaoka\Aws\Structures\SnowBall\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NFSOnDeviceServiceConfiguration $NFSOnDeviceService
 * @property TGWOnDeviceServiceConfiguration $TGWOnDeviceService
 * @property EKSOnDeviceServiceConfiguration $EKSOnDeviceService
 * @property S3OnDeviceServiceConfiguration $S3OnDeviceService
 */
class OnDeviceServiceConfiguration extends Shape
{
    /**
     * @param array{
     *     NFSOnDeviceService?: NFSOnDeviceServiceConfiguration,
     *     TGWOnDeviceService?: TGWOnDeviceServiceConfiguration,
     *     EKSOnDeviceService?: EKSOnDeviceServiceConfiguration,
     *     S3OnDeviceService?: S3OnDeviceServiceConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
