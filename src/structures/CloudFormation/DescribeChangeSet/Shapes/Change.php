<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeChangeSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Resource' $Type
 * @property int $HookInvocationCount
 * @property ResourceChange $ResourceChange
 */
class Change extends Shape
{
    /**
     * @param array{
     *     Type?: 'Resource',
     *     HookInvocationCount?: int,
     *     ResourceChange?: ResourceChange
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
