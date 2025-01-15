<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeAccountAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AttributeName
 * @property list<AccountAttributeValue>|null $AttributeValues
 */
class AccountAttribute extends Shape
{
    /**
     * @param array{
     *     AttributeName?: string|null,
     *     AttributeValues?: list<AccountAttributeValue>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
