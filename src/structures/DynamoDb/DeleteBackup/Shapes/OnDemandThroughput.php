<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DeleteBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $MaxReadRequestUnits
 * @property int|null $MaxWriteRequestUnits
 */
class OnDemandThroughput extends Shape
{
    /**
     * @param array{
     *     MaxReadRequestUnits?: int|null,
     *     MaxWriteRequestUnits?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
