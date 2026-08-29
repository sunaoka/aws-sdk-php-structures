<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetAwsOpportunitySummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MonetaryValue|null $Value
 * @property string|null $Discount
 * @property string|null $EffectiveDate
 * @property string|null $ExpirationDate
 */
class AwsSoftwareRevenue extends Shape
{
    /**
     * @param array{
     *     Value?: MonetaryValue|null,
     *     Discount?: string|null,
     *     EffectiveDate?: string|null,
     *     ExpirationDate?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
