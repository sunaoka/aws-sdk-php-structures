<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetRevenueStatisticsSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TotalAmount
 * @property string|null $VerifiedAmount
 * @property string|null $UnverifiedAmount
 * @property 'USDC'|null $Currency
 * @property int<0, max>|null $TotalSettled
 * @property int<0, max>|null $TotalMonetizeServed
 */
class RevenueBreakdown extends Shape
{
    /**
     * @param array{
     *     TotalAmount?: string|null,
     *     VerifiedAmount?: string|null,
     *     UnverifiedAmount?: string|null,
     *     Currency?: 'USDC'|null,
     *     TotalSettled?: int<0, max>|null,
     *     TotalMonetizeServed?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
