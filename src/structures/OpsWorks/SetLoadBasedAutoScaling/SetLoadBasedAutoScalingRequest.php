<?php

namespace Sunaoka\Aws\Structures\OpsWorks\SetLoadBasedAutoScaling;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LayerId
 * @property bool|null $Enable
 * @property Shapes\AutoScalingThresholds|null $UpScaling
 * @property Shapes\AutoScalingThresholds|null $DownScaling
 */
class SetLoadBasedAutoScalingRequest extends Request
{
    /**
     * @param array{
     *     LayerId: string,
     *     Enable?: bool|null,
     *     UpScaling?: Shapes\AutoScalingThresholds|null,
     *     DownScaling?: Shapes\AutoScalingThresholds|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
