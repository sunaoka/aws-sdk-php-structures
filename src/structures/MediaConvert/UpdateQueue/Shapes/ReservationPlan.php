<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdateQueue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ONE_YEAR'|null $Commitment
 * @property \Aws\Api\DateTimeResult|null $ExpiresAt
 * @property \Aws\Api\DateTimeResult|null $PurchasedAt
 * @property 'AUTO_RENEW'|'EXPIRE'|null $RenewalType
 * @property int|null $ReservedSlots
 * @property 'ACTIVE'|'EXPIRED'|null $Status
 */
class ReservationPlan extends Shape
{
    /**
     * @param array{
     *     Commitment?: 'ONE_YEAR'|null,
     *     ExpiresAt?: \Aws\Api\DateTimeResult|null,
     *     PurchasedAt?: \Aws\Api\DateTimeResult|null,
     *     RenewalType?: 'AUTO_RENEW'|'EXPIRE'|null,
     *     ReservedSlots?: int|null,
     *     Status?: 'ACTIVE'|'EXPIRED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
