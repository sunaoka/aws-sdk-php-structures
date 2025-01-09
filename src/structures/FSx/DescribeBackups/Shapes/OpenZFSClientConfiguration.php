<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeBackups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Clients
 * @property list<string> $Options
 */
class OpenZFSClientConfiguration extends Shape
{
    /**
     * @param array{
     *     Clients: string,
     *     Options: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
