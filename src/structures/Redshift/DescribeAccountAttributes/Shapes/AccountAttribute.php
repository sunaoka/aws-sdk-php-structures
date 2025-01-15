<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeAccountAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AttributeName
 * @property list<AttributeValueTarget>|null $AttributeValues
 */
class AccountAttribute extends Shape
{
    /**
     * @param array{
     *     AttributeName?: string|null,
     *     AttributeValues?: list<AttributeValueTarget>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
