<?php

namespace Sunaoka\Aws\Structures\Ses\GetSendStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $Timestamp
 * @property int $DeliveryAttempts
 * @property int $Bounces
 * @property int $Complaints
 * @property int $Rejects
 */
class SendDataPoint extends Shape
{
    /**
     * @param array{
     *     Timestamp?: \Aws\Api\DateTimeResult,
     *     DeliveryAttempts?: int,
     *     Bounces?: int,
     *     Complaints?: int,
     *     Rejects?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
