<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeChangeSetHooks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PRE_PROVISION'|null $InvocationPoint
 * @property 'FAIL'|'WARN'|null $FailureMode
 * @property string|null $TypeName
 * @property string|null $TypeVersionId
 * @property string|null $TypeConfigurationVersionId
 * @property ChangeSetHookTargetDetails|null $TargetDetails
 */
class ChangeSetHook extends Shape
{
    /**
     * @param array{
     *     InvocationPoint?: 'PRE_PROVISION'|null,
     *     FailureMode?: 'FAIL'|'WARN'|null,
     *     TypeName?: string|null,
     *     TypeVersionId?: string|null,
     *     TypeConfigurationVersionId?: string|null,
     *     TargetDetails?: ChangeSetHookTargetDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
