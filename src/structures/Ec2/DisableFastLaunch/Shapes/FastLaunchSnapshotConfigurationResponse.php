<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableFastLaunch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $TargetResourceCount
 */
class FastLaunchSnapshotConfigurationResponse extends Shape
{
    /**
     * @param array{TargetResourceCount?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
