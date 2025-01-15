<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeLoadBasedAutoScaling\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LayerId
 * @property bool|null $Enable
 * @property AutoScalingThresholds|null $UpScaling
 * @property AutoScalingThresholds|null $DownScaling
 */
class LoadBasedAutoScalingConfiguration extends Shape
{
    /**
     * @param array{
     *     LayerId?: string|null,
     *     Enable?: bool|null,
     *     UpScaling?: AutoScalingThresholds|null,
     *     DownScaling?: AutoScalingThresholds|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
