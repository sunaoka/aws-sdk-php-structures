<?php

namespace Sunaoka\Aws\Structures\DynamoDb\RestoreTableFromBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $ReadCapacityUnits
 */
class ProvisionedThroughputOverride extends Shape
{
    /**
     * @param array{ReadCapacityUnits?: int<1, max>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
