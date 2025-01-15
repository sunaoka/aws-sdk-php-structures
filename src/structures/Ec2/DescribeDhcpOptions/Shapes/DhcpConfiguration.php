<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeDhcpOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Key
 * @property list<AttributeValue>|null $Values
 */
class DhcpConfiguration extends Shape
{
    /**
     * @param array{
     *     Key?: string|null,
     *     Values?: list<AttributeValue>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
