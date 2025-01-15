<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetDeploymentTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $deploymentId
 * @property string|null $targetId
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property list<LifecycleEvent>|null $lifecycleEvents
 * @property 'Pending'|'InProgress'|'Succeeded'|'Failed'|'Skipped'|'Unknown'|'Ready'|null $status
 * @property string|null $resourceType
 * @property double|null $targetVersionWeight
 */
class CloudFormationTarget extends Shape
{
    /**
     * @param array{
     *     deploymentId?: string|null,
     *     targetId?: string|null,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     lifecycleEvents?: list<LifecycleEvent>|null,
     *     status?: 'Pending'|'InProgress'|'Succeeded'|'Failed'|'Skipped'|'Unknown'|'Ready'|null,
     *     resourceType?: string|null,
     *     targetVersionWeight?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
