<?php

namespace Sunaoka\Aws\Structures\MQ\UpdateBroker\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BrokerId
 * @property string $Region
 */
class DataReplicationCounterpart extends Shape
{
    /**
     * @param array{
     *     BrokerId: string,
     *     Region: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
