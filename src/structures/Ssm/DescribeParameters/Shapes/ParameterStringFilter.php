<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeParameters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property string $Option
 * @property list<string> $Values
 */
class ParameterStringFilter extends Shape
{
    /**
     * @param array{
     *     Key: string,
     *     Option?: string,
     *     Values?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
