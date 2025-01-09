<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeChangeSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Resource' $Type
 * @property int<1, 100> $HookInvocationCount
 * @property ResourceChange $ResourceChange
 */
class Change extends Shape
{
    /**
     * @param array{
     *     Type?: 'Resource',
     *     HookInvocationCount?: int<1, 100>,
     *     ResourceChange?: ResourceChange
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
