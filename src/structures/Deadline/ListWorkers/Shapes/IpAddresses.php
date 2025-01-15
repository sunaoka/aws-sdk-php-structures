<?php

namespace Sunaoka\Aws\Structures\Deadline\ListWorkers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $ipV4Addresses
 * @property list<string>|null $ipV6Addresses
 */
class IpAddresses extends Shape
{
    /**
     * @param array{
     *     ipV4Addresses?: list<string>|null,
     *     ipV6Addresses?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
