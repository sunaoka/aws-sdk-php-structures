<?php

namespace Sunaoka\Aws\Structures\MQ\DescribeBroker\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConsoleURL
 * @property list<string>|null $Endpoints
 * @property string|null $IpAddress
 */
class BrokerInstance extends Shape
{
    /**
     * @param array{
     *     ConsoleURL?: string|null,
     *     Endpoints?: list<string>|null,
     *     IpAddress?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
