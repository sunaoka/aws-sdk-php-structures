<?php

namespace Sunaoka\Aws\Structures\Keyspaces\GetTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PAY_PER_REQUEST'|'PROVISIONED' $throughputMode
 * @property int $readCapacityUnits
 * @property int $writeCapacityUnits
 * @property \Aws\Api\DateTimeResult $lastUpdateToPayPerRequestTimestamp
 */
class CapacitySpecificationSummary extends Shape
{
    /**
     * @param array{
     *     throughputMode: 'PAY_PER_REQUEST'|'PROVISIONED',
     *     readCapacityUnits?: int,
     *     writeCapacityUnits?: int,
     *     lastUpdateToPayPerRequestTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
