<?php

namespace Sunaoka\Aws\Structures\PartnerCentralBenefits\GetBenefitAllocation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IssuanceId
 * @property MonetaryValue|null $IssuanceAmount
 * @property \Aws\Api\DateTimeResult|null $IssuedAt
 */
class IssuanceDetail extends Shape
{
    /**
     * @param array{
     *     IssuanceId?: string|null,
     *     IssuanceAmount?: MonetaryValue|null,
     *     IssuedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
