<?php

namespace Sunaoka\Aws\Structures\Keyspaces\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PAY_PER_REQUEST'|'PROVISIONED' $throughputMode
 * @property int $readCapacityUnits
 * @property int $writeCapacityUnits
 */
class CapacitySpecification extends Shape
{
    /**
     * @param array{
     *     throughputMode: 'PAY_PER_REQUEST'|'PROVISIONED',
     *     readCapacityUnits?: int,
     *     writeCapacityUnits?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
