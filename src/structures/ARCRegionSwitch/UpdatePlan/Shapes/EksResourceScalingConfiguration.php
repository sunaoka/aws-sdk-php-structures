<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\UpdatePlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $timeoutMinutes
 * @property KubernetesResourceType $kubernetesResourceType
 * @property list<array<string, array<string, KubernetesScalingResource>>>|null $scalingResources
 * @property list<EksCluster>|null $eksClusters
 * @property EksResourceScalingUngraceful|null $ungraceful
 * @property int<1, max>|null $targetPercent
 * @property 'sampledMaxInLast24Hours'|null $capacityMonitoringApproach
 */
class EksResourceScalingConfiguration extends Shape
{
    /**
     * @param array{
     *     timeoutMinutes?: int<1, max>|null,
     *     kubernetesResourceType: KubernetesResourceType,
     *     scalingResources?: list<array<string, array<string, KubernetesScalingResource>>>|null,
     *     eksClusters?: list<EksCluster>|null,
     *     ungraceful?: EksResourceScalingUngraceful|null,
     *     targetPercent?: int<1, max>|null,
     *     capacityMonitoringApproach?: 'sampledMaxInLast24Hours'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
