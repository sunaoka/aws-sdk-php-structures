<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetDeploymentTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $deploymentId
 * @property string $targetId
 * @property string $targetArn
 * @property 'Pending'|'InProgress'|'Succeeded'|'Failed'|'Skipped'|'Unknown'|'Ready' $status
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property list<LifecycleEvent> $lifecycleEvents
 * @property LambdaFunctionInfo $lambdaFunctionInfo
 */
class LambdaTarget extends Shape
{
    /**
     * @param array{
     *     deploymentId?: string,
     *     targetId?: string,
     *     targetArn?: string,
     *     status?: 'Pending'|'InProgress'|'Succeeded'|'Failed'|'Skipped'|'Unknown'|'Ready',
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     lifecycleEvents?: list<LifecycleEvent>,
     *     lambdaFunctionInfo?: LambdaFunctionInfo
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
