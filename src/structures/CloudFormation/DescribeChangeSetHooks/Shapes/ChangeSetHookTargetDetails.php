<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeChangeSetHooks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RESOURCE'|null $TargetType
 * @property ChangeSetHookResourceTargetDetails|null $ResourceTargetDetails
 */
class ChangeSetHookTargetDetails extends Shape
{
    /**
     * @param array{
     *     TargetType?: 'RESOURCE'|null,
     *     ResourceTargetDetails?: ChangeSetHookResourceTargetDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
