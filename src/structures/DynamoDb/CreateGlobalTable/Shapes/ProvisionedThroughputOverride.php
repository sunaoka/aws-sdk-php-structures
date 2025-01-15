<?php

namespace Sunaoka\Aws\Structures\DynamoDb\CreateGlobalTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $ReadCapacityUnits
 */
class ProvisionedThroughputOverride extends Shape
{
    /**
     * @param array{ReadCapacityUnits?: int<1, max>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
