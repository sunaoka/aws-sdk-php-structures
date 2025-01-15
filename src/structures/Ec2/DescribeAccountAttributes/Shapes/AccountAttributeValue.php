<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeAccountAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AttributeValue
 */
class AccountAttributeValue extends Shape
{
    /**
     * @param array{AttributeValue?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
