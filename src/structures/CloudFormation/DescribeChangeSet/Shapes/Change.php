<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeChangeSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Resource'|null $Type
 * @property int<1, 100>|null $HookInvocationCount
 * @property ResourceChange|null $ResourceChange
 */
class Change extends Shape
{
    /**
     * @param array{
     *     Type?: 'Resource'|null,
     *     HookInvocationCount?: int<1, 100>|null,
     *     ResourceChange?: ResourceChange|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
