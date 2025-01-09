<?php

namespace Sunaoka\Aws\Structures\MQ\DescribeBroker\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConsoleURL
 * @property list<string> $Endpoints
 * @property string $IpAddress
 */
class BrokerInstance extends Shape
{
    /**
     * @param array{
     *     ConsoleURL?: string,
     *     Endpoints?: list<string>,
     *     IpAddress?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
