<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetDeploymentInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $deploymentId
 * @property string $instanceId
 * @property 'Pending'|'InProgress'|'Succeeded'|'Failed'|'Skipped'|'Unknown'|'Ready' $status
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property list<LifecycleEvent> $lifecycleEvents
 * @property 'Blue'|'Green' $instanceType
 */
class InstanceSummary extends Shape
{
    /**
     * @param array{
     *     deploymentId?: string,
     *     instanceId?: string,
     *     status?: 'Pending'|'InProgress'|'Succeeded'|'Failed'|'Skipped'|'Unknown'|'Ready',
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     lifecycleEvents?: list<LifecycleEvent>,
     *     instanceType?: 'Blue'|'Green'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
