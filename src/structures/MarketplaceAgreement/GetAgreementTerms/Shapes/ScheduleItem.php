<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $chargeAmount
 * @property \Aws\Api\DateTimeResult|null $chargeDate
 */
class ScheduleItem extends Shape
{
    /**
     * @param array{
     *     chargeAmount?: string|null,
     *     chargeDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
