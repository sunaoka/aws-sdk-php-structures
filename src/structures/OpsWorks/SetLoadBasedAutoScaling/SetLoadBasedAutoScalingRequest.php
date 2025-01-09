<?php

namespace Sunaoka\Aws\Structures\OpsWorks\SetLoadBasedAutoScaling;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LayerId
 * @property bool $Enable
 * @property Shapes\AutoScalingThresholds $UpScaling
 * @property Shapes\AutoScalingThresholds $DownScaling
 */
class SetLoadBasedAutoScalingRequest extends Request
{
    /**
     * @param array{
     *     LayerId: string,
     *     Enable?: bool,
     *     UpScaling?: Shapes\AutoScalingThresholds,
     *     DownScaling?: Shapes\AutoScalingThresholds
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
