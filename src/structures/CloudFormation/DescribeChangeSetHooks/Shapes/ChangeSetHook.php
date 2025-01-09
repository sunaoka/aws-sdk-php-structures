<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeChangeSetHooks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PRE_PROVISION' $InvocationPoint
 * @property 'FAIL'|'WARN' $FailureMode
 * @property string $TypeName
 * @property string $TypeVersionId
 * @property string $TypeConfigurationVersionId
 * @property ChangeSetHookTargetDetails $TargetDetails
 */
class ChangeSetHook extends Shape
{
    /**
     * @param array{
     *     InvocationPoint?: 'PRE_PROVISION',
     *     FailureMode?: 'FAIL'|'WARN',
     *     TypeName?: string,
     *     TypeVersionId?: string,
     *     TypeConfigurationVersionId?: string,
     *     TargetDetails?: ChangeSetHookTargetDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
