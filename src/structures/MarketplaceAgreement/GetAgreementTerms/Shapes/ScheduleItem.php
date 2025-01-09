<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $chargeAmount
 * @property \Aws\Api\DateTimeResult $chargeDate
 */
class ScheduleItem extends Shape
{
    /**
     * @param array{
     *     chargeAmount?: string,
     *     chargeDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
