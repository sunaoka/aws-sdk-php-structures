<?php

namespace Sunaoka\Aws\Structures\Deadline\GetSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $ipV4Addresses
 * @property list<string> $ipV6Addresses
 */
class IpAddresses extends Shape
{
    /**
     * @param array{
     *     ipV4Addresses?: list<string>,
     *     ipV6Addresses?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
