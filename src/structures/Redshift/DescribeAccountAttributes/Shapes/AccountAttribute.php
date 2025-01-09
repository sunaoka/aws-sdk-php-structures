<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeAccountAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AttributeName
 * @property list<AttributeValueTarget> $AttributeValues
 */
class AccountAttribute extends Shape
{
    /**
     * @param array{
     *     AttributeName?: string,
     *     AttributeValues?: list<AttributeValueTarget>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
