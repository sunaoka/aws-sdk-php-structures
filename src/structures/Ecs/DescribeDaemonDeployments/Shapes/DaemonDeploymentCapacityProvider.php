<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeDaemonDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property int|null $runningInstanceCount
 * @property int|null $drainingInstanceCount
 */
class DaemonDeploymentCapacityProvider extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     runningInstanceCount?: int|null,
     *     drainingInstanceCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
