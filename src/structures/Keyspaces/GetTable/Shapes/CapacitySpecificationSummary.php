<?php

namespace Sunaoka\Aws\Structures\Keyspaces\GetTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PAY_PER_REQUEST'|'PROVISIONED' $throughputMode
 * @property int<1, max>|null $readCapacityUnits
 * @property int<1, max>|null $writeCapacityUnits
 * @property \Aws\Api\DateTimeResult|null $lastUpdateToPayPerRequestTimestamp
 */
class CapacitySpecificationSummary extends Shape
{
    /**
     * @param array{
     *     throughputMode: 'PAY_PER_REQUEST'|'PROVISIONED',
     *     readCapacityUnits?: int<1, max>|null,
     *     writeCapacityUnits?: int<1, max>|null,
     *     lastUpdateToPayPerRequestTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
