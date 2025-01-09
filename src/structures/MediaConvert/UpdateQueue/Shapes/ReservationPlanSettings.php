<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdateQueue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ONE_YEAR' $Commitment
 * @property 'AUTO_RENEW'|'EXPIRE' $RenewalType
 * @property int $ReservedSlots
 */
class ReservationPlanSettings extends Shape
{
    /**
     * @param array{
     *     Commitment: 'ONE_YEAR',
     *     RenewalType: 'AUTO_RENEW'|'EXPIRE',
     *     ReservedSlots: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
