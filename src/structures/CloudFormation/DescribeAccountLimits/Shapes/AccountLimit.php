<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeAccountLimits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property int $Value
 */
class AccountLimit extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Value?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
