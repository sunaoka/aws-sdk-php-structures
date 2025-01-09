<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateDhcpOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property list<AttributeValue> $Values
 */
class DhcpConfiguration extends Shape
{
    /**
     * @param array{
     *     Key?: string,
     *     Values?: list<AttributeValue>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
