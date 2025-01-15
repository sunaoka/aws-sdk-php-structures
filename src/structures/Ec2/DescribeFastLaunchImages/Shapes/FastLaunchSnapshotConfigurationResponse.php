<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFastLaunchImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $TargetResourceCount
 */
class FastLaunchSnapshotConfigurationResponse extends Shape
{
    /**
     * @param array{TargetResourceCount?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
