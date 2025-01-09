<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeAccountAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AttributeName
 * @property list<AccountAttributeValue> $AttributeValues
 */
class AccountAttribute extends Shape
{
    /**
     * @param array{
     *     AttributeName?: string,
     *     AttributeValues?: list<AccountAttributeValue>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
