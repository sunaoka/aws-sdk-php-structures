<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeClusterVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $tierName
 * @property int|null $apiRequestConcurrency
 * @property int|null $podSchedulingRatePerSecond
 * @property int|null $clusterDatabaseSizeGb
 * @property ControlPlaneConfigInfo|null $controlPlaneComponentConfigOverrides
 */
class ControlPlaneScalingTierInfo extends Shape
{
    /**
     * @param array{
     *     tierName?: string|null,
     *     apiRequestConcurrency?: int|null,
     *     podSchedulingRatePerSecond?: int|null,
     *     clusterDatabaseSizeGb?: int|null,
     *     controlPlaneComponentConfigOverrides?: ControlPlaneConfigInfo|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
