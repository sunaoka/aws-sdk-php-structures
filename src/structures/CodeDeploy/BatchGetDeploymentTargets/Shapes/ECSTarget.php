<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetDeploymentTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $deploymentId
 * @property string $targetId
 * @property string $targetArn
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property list<LifecycleEvent> $lifecycleEvents
 * @property 'Pending'|'InProgress'|'Succeeded'|'Failed'|'Skipped'|'Unknown'|'Ready' $status
 * @property list<ECSTaskSet> $taskSetsInfo
 */
class ECSTarget extends Shape
{
    /**
     * @param array{
     *     deploymentId?: string,
     *     targetId?: string,
     *     targetArn?: string,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     lifecycleEvents?: list<LifecycleEvent>,
     *     status?: 'Pending'|'InProgress'|'Succeeded'|'Failed'|'Skipped'|'Unknown'|'Ready',
     *     taskSetsInfo?: list<ECSTaskSet>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
