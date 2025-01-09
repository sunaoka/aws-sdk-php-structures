<?php

namespace Sunaoka\Aws\Structures\MQ\DescribeBroker\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConfigurationId $Current
 * @property list<ConfigurationId> $History
 * @property ConfigurationId $Pending
 */
class Configurations extends Shape
{
    /**
     * @param array{
     *     Current?: ConfigurationId,
     *     History?: list<ConfigurationId>,
     *     Pending?: ConfigurationId
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
