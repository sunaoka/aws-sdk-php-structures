<?php

namespace Sunaoka\Aws\Structures\Keyspaces\GetTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PAY_PER_REQUEST'|'PROVISIONED' $throughputMode
 * @property int<1, max> $readCapacityUnits
 * @property int<1, max> $writeCapacityUnits
 * @property \Aws\Api\DateTimeResult $lastUpdateToPayPerRequestTimestamp
 */
class CapacitySpecificationSummary extends Shape
{
    /**
     * @param array{
     *     throughputMode: 'PAY_PER_REQUEST'|'PROVISIONED',
     *     readCapacityUnits?: int<1, max>,
     *     writeCapacityUnits?: int<1, max>,
     *     lastUpdateToPayPerRequestTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
