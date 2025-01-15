<?php

namespace Sunaoka\Aws\Structures\DynamoDb\CreateGlobalTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $MaxReadRequestUnits
 */
class OnDemandThroughputOverride extends Shape
{
    /**
     * @param array{MaxReadRequestUnits?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
