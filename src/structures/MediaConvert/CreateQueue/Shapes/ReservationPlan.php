<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateQueue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ONE_YEAR' $Commitment
 * @property \Aws\Api\DateTimeResult $ExpiresAt
 * @property \Aws\Api\DateTimeResult $PurchasedAt
 * @property 'AUTO_RENEW'|'EXPIRE' $RenewalType
 * @property int $ReservedSlots
 * @property 'ACTIVE'|'EXPIRED' $Status
 */
class ReservationPlan extends Shape
{
    /**
     * @param array{
     *     Commitment?: 'ONE_YEAR',
     *     ExpiresAt?: \Aws\Api\DateTimeResult,
     *     PurchasedAt?: \Aws\Api\DateTimeResult,
     *     RenewalType?: 'AUTO_RENEW'|'EXPIRE',
     *     ReservedSlots?: int,
     *     Status?: 'ACTIVE'|'EXPIRED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
