<?php

namespace Sunaoka\Aws\Structures\SnowBall\UpdateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NFSOnDeviceServiceConfiguration|null $NFSOnDeviceService
 * @property TGWOnDeviceServiceConfiguration|null $TGWOnDeviceService
 * @property EKSOnDeviceServiceConfiguration|null $EKSOnDeviceService
 * @property S3OnDeviceServiceConfiguration|null $S3OnDeviceService
 */
class OnDeviceServiceConfiguration extends Shape
{
    /**
     * @param array{
     *     NFSOnDeviceService?: NFSOnDeviceServiceConfiguration|null,
     *     TGWOnDeviceService?: TGWOnDeviceServiceConfiguration|null,
     *     EKSOnDeviceService?: EKSOnDeviceServiceConfiguration|null,
     *     S3OnDeviceService?: S3OnDeviceServiceConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
