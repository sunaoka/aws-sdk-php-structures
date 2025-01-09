<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeInstancePatchStatesForPatchGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property list<string> $Values
 * @property 'Equal'|'NotEqual'|'LessThan'|'GreaterThan' $Type
 */
class InstancePatchStateFilter extends Shape
{
    /**
     * @param array{
     *     Key: string,
     *     Values: list<string>,
     *     Type: 'Equal'|'NotEqual'|'LessThan'|'GreaterThan'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
