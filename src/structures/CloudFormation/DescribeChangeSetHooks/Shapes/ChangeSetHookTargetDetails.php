<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeChangeSetHooks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RESOURCE' $TargetType
 * @property ChangeSetHookResourceTargetDetails $ResourceTargetDetails
 */
class ChangeSetHookTargetDetails extends Shape
{
    /**
     * @param array{
     *     TargetType?: 'RESOURCE',
     *     ResourceTargetDetails?: ChangeSetHookResourceTargetDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
