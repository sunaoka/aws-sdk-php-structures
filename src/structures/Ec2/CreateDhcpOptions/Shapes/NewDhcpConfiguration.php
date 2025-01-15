<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateDhcpOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Key
 * @property list<string>|null $Values
 */
class NewDhcpConfiguration extends Shape
{
    /**
     * @param array{
     *     Key?: string|null,
     *     Values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
