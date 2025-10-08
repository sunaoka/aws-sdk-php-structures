<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\UpdatePlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $timeoutMinutes
 * @property list<Asg> $asgs
 * @property Ec2Ungraceful|null $ungraceful
 * @property int|null $targetPercent
 * @property 'sampledMaxInLast24Hours'|'autoscalingMaxInLast24Hours'|null $capacityMonitoringApproach
 */
class Ec2AsgCapacityIncreaseConfiguration extends Shape
{
    /**
     * @param array{
     *     timeoutMinutes?: int<1, max>|null,
     *     asgs: list<Asg>,
     *     ungraceful?: Ec2Ungraceful|null,
     *     targetPercent?: int|null,
     *     capacityMonitoringApproach?: 'sampledMaxInLast24Hours'|'autoscalingMaxInLast24Hours'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
