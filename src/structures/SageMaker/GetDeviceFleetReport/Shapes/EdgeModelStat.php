<?php

namespace Sunaoka\Aws\Structures\SageMaker\GetDeviceFleetReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ModelName
 * @property string $ModelVersion
 * @property int $OfflineDeviceCount
 * @property int $ConnectedDeviceCount
 * @property int $ActiveDeviceCount
 * @property int $SamplingDeviceCount
 */
class EdgeModelStat extends Shape
{
    /**
     * @param array{
     *     ModelName: string,
     *     ModelVersion: string,
     *     OfflineDeviceCount: int,
     *     ConnectedDeviceCount: int,
     *     ActiveDeviceCount: int,
     *     SamplingDeviceCount: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
