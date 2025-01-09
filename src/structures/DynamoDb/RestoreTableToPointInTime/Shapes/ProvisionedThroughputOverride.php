<?php

namespace Sunaoka\Aws\Structures\DynamoDb\RestoreTableToPointInTime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ReadCapacityUnits
 */
class ProvisionedThroughputOverride extends Shape
{
    /**
     * @param array{ReadCapacityUnits?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
