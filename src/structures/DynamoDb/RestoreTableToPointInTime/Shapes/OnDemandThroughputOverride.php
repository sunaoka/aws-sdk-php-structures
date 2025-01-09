<?php

namespace Sunaoka\Aws\Structures\DynamoDb\RestoreTableToPointInTime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaxReadRequestUnits
 */
class OnDemandThroughputOverride extends Shape
{
    /**
     * @param array{MaxReadRequestUnits?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
