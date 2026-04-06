<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServiceRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ManagedIngressPath>|null $ingressPaths
 * @property ManagedAutoScaling|null $autoScaling
 * @property list<ManagedMetricAlarm>|null $metricAlarms
 * @property list<ManagedSecurityGroup>|null $serviceSecurityGroups
 * @property list<ManagedLogGroup>|null $logGroups
 */
class ECSManagedResources extends Shape
{
    /**
     * @param array{
     *     ingressPaths?: list<ManagedIngressPath>|null,
     *     autoScaling?: ManagedAutoScaling|null,
     *     metricAlarms?: list<ManagedMetricAlarm>|null,
     *     serviceSecurityGroups?: list<ManagedSecurityGroup>|null,
     *     logGroups?: list<ManagedLogGroup>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
