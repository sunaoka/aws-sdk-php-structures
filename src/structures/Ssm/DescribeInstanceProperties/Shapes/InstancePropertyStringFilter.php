<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeInstanceProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property list<string> $Values
 * @property 'Equal'|'NotEqual'|'BeginWith'|'LessThan'|'GreaterThan' $Operator
 */
class InstancePropertyStringFilter extends Shape
{
    /**
     * @param array{
     *     Key: string,
     *     Values: list<string>,
     *     Operator?: 'Equal'|'NotEqual'|'BeginWith'|'LessThan'|'GreaterThan'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
