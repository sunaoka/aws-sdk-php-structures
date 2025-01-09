<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListHookResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PRE_PROVISION' $InvocationPoint
 * @property 'FAIL'|'WARN' $FailureMode
 * @property string $TypeName
 * @property string $TypeVersionId
 * @property string $TypeConfigurationVersionId
 * @property 'HOOK_IN_PROGRESS'|'HOOK_COMPLETE_SUCCEEDED'|'HOOK_COMPLETE_FAILED'|'HOOK_FAILED' $Status
 * @property string $HookStatusReason
 */
class HookResultSummary extends Shape
{
    /**
     * @param array{
     *     InvocationPoint?: 'PRE_PROVISION',
     *     FailureMode?: 'FAIL'|'WARN',
     *     TypeName?: string,
     *     TypeVersionId?: string,
     *     TypeConfigurationVersionId?: string,
     *     Status?: 'HOOK_IN_PROGRESS'|'HOOK_COMPLETE_SUCCEEDED'|'HOOK_COMPLETE_FAILED'|'HOOK_FAILED',
     *     HookStatusReason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
