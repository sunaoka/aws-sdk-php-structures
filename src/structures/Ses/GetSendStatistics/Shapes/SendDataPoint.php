<?php

namespace Sunaoka\Aws\Structures\Ses\GetSendStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $Timestamp
 * @property int|null $DeliveryAttempts
 * @property int|null $Bounces
 * @property int|null $Complaints
 * @property int|null $Rejects
 */
class SendDataPoint extends Shape
{
    /**
     * @param array{
     *     Timestamp?: \Aws\Api\DateTimeResult|null,
     *     DeliveryAttempts?: int|null,
     *     Bounces?: int|null,
     *     Complaints?: int|null,
     *     Rejects?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
