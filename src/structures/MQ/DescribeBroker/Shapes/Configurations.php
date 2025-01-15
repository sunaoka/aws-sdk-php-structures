<?php

namespace Sunaoka\Aws\Structures\MQ\DescribeBroker\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConfigurationId|null $Current
 * @property list<ConfigurationId>|null $History
 * @property ConfigurationId|null $Pending
 */
class Configurations extends Shape
{
    /**
     * @param array{
     *     Current?: ConfigurationId|null,
     *     History?: list<ConfigurationId>|null,
     *     Pending?: ConfigurationId|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
