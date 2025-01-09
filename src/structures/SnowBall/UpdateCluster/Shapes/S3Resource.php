<?php

namespace Sunaoka\Aws\Structures\SnowBall\UpdateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketArn
 * @property KeyRange $KeyRange
 * @property list<TargetOnDeviceService> $TargetOnDeviceServices
 */
class S3Resource extends Shape
{
    /**
     * @param array{
     *     BucketArn?: string,
     *     KeyRange?: KeyRange,
     *     TargetOnDeviceServices?: list<TargetOnDeviceService>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
