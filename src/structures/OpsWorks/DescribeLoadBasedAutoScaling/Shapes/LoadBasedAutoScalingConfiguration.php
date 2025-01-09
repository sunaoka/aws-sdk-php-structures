<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeLoadBasedAutoScaling\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LayerId
 * @property bool $Enable
 * @property AutoScalingThresholds $UpScaling
 * @property AutoScalingThresholds $DownScaling
 */
class LoadBasedAutoScalingConfiguration extends Shape
{
    /**
     * @param array{
     *     LayerId?: string,
     *     Enable?: bool,
     *     UpScaling?: AutoScalingThresholds,
     *     DownScaling?: AutoScalingThresholds
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
