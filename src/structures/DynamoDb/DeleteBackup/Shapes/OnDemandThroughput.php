<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DeleteBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaxReadRequestUnits
 * @property int $MaxWriteRequestUnits
 */
class OnDemandThroughput extends Shape
{
    /**
     * @param array{
     *     MaxReadRequestUnits?: int,
     *     MaxWriteRequestUnits?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
