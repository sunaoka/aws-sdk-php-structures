<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeDaemonDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $drainPercent
 * @property DaemonAlarmConfiguration|null $alarms
 * @property int|null $bakeTimeInMinutes
 */
class DaemonDeploymentConfiguration extends Shape
{
    /**
     * @param array{
     *     drainPercent?: double|null,
     *     alarms?: DaemonAlarmConfiguration|null,
     *     bakeTimeInMinutes?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
