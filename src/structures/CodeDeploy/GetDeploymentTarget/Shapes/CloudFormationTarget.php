<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetDeploymentTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $deploymentId
 * @property string $targetId
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property list<LifecycleEvent> $lifecycleEvents
 * @property 'Pending'|'InProgress'|'Succeeded'|'Failed'|'Skipped'|'Unknown'|'Ready' $status
 * @property string $resourceType
 * @property double $targetVersionWeight
 */
class CloudFormationTarget extends Shape
{
    /**
     * @param array{
     *     deploymentId?: string,
     *     targetId?: string,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     lifecycleEvents?: list<LifecycleEvent>,
     *     status?: 'Pending'|'InProgress'|'Succeeded'|'Failed'|'Skipped'|'Unknown'|'Ready',
     *     resourceType?: string,
     *     targetVersionWeight?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
