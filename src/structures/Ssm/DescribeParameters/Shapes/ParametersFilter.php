<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeParameters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Name'|'Type'|'KeyId' $Key
 * @property list<string> $Values
 */
class ParametersFilter extends Shape
{
    /**
     * @param array{
     *     Key: 'Name'|'Type'|'KeyId',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
