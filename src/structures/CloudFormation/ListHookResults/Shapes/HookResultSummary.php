<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListHookResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HookResultId
 * @property 'PRE_PROVISION'|null $InvocationPoint
 * @property 'FAIL'|'WARN'|null $FailureMode
 * @property string|null $TypeName
 * @property string|null $TypeVersionId
 * @property string|null $TypeConfigurationVersionId
 * @property 'HOOK_IN_PROGRESS'|'HOOK_COMPLETE_SUCCEEDED'|'HOOK_COMPLETE_FAILED'|'HOOK_FAILED'|null $Status
 * @property string|null $HookStatusReason
 * @property \Aws\Api\DateTimeResult|null $InvokedAt
 * @property 'CHANGE_SET'|'STACK'|'RESOURCE'|'CLOUD_CONTROL'|null $TargetType
 * @property string|null $TargetId
 * @property string|null $TypeArn
 * @property string|null $HookExecutionTarget
 */
class HookResultSummary extends Shape
{
    /**
     * @param array{
     *     HookResultId?: string|null,
     *     InvocationPoint?: 'PRE_PROVISION'|null,
     *     FailureMode?: 'FAIL'|'WARN'|null,
     *     TypeName?: string|null,
     *     TypeVersionId?: string|null,
     *     TypeConfigurationVersionId?: string|null,
     *     Status?: 'HOOK_IN_PROGRESS'|'HOOK_COMPLETE_SUCCEEDED'|'HOOK_COMPLETE_FAILED'|'HOOK_FAILED'|null,
     *     HookStatusReason?: string|null,
     *     InvokedAt?: \Aws\Api\DateTimeResult|null,
     *     TargetType?: 'CHANGE_SET'|'STACK'|'RESOURCE'|'CLOUD_CONTROL'|null,
     *     TargetId?: string|null,
     *     TypeArn?: string|null,
     *     HookExecutionTarget?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
