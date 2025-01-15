<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListHookResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PRE_PROVISION'|null $InvocationPoint
 * @property 'FAIL'|'WARN'|null $FailureMode
 * @property string|null $TypeName
 * @property string|null $TypeVersionId
 * @property string|null $TypeConfigurationVersionId
 * @property 'HOOK_IN_PROGRESS'|'HOOK_COMPLETE_SUCCEEDED'|'HOOK_COMPLETE_FAILED'|'HOOK_FAILED'|null $Status
 * @property string|null $HookStatusReason
 */
class HookResultSummary extends Shape
{
    /**
     * @param array{
     *     InvocationPoint?: 'PRE_PROVISION'|null,
     *     FailureMode?: 'FAIL'|'WARN'|null,
     *     TypeName?: string|null,
     *     TypeVersionId?: string|null,
     *     TypeConfigurationVersionId?: string|null,
     *     Status?: 'HOOK_IN_PROGRESS'|'HOOK_COMPLETE_SUCCEEDED'|'HOOK_COMPLETE_FAILED'|'HOOK_FAILED'|null,
     *     HookStatusReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
