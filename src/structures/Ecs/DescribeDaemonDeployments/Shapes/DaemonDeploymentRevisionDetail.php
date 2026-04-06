<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeDaemonDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property list<DaemonDeploymentCapacityProvider>|null $capacityProviders
 * @property int|null $totalRunningInstanceCount
 * @property int|null $totalDrainingInstanceCount
 */
class DaemonDeploymentRevisionDetail extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     capacityProviders?: list<DaemonDeploymentCapacityProvider>|null,
     *     totalRunningInstanceCount?: int|null,
     *     totalDrainingInstanceCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
