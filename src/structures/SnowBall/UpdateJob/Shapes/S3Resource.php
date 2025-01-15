<?php

namespace Sunaoka\Aws\Structures\SnowBall\UpdateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BucketArn
 * @property KeyRange|null $KeyRange
 * @property list<TargetOnDeviceService>|null $TargetOnDeviceServices
 */
class S3Resource extends Shape
{
    /**
     * @param array{
     *     BucketArn?: string|null,
     *     KeyRange?: KeyRange|null,
     *     TargetOnDeviceServices?: list<TargetOnDeviceService>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
