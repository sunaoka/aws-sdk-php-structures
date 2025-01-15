<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetDeploymentTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $deploymentId
 * @property string|null $targetId
 * @property string|null $targetArn
 * @property 'Pending'|'InProgress'|'Succeeded'|'Failed'|'Skipped'|'Unknown'|'Ready'|null $status
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property list<LifecycleEvent>|null $lifecycleEvents
 * @property 'Blue'|'Green'|null $instanceLabel
 */
class InstanceTarget extends Shape
{
    /**
     * @param array{
     *     deploymentId?: string|null,
     *     targetId?: string|null,
     *     targetArn?: string|null,
     *     status?: 'Pending'|'InProgress'|'Succeeded'|'Failed'|'Skipped'|'Unknown'|'Ready'|null,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     lifecycleEvents?: list<LifecycleEvent>|null,
     *     instanceLabel?: 'Blue'|'Green'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
