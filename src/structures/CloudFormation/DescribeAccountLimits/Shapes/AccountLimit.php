<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeAccountLimits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property int|null $Value
 */
class AccountLimit extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Value?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
