<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $chargeDate
 * @property string|null $chargeAmount
 */
class ScheduleItem extends Shape
{
    /**
     * @param array{
     *     chargeDate?: \Aws\Api\DateTimeResult|null,
     *     chargeAmount?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
