<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetAwsOpportunitySummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 100>|null $Score
 * @property string|null $Trend
 */
class OpportunityQuality extends Shape
{
    /**
     * @param array{
     *     Score?: int<0, 100>|null,
     *     Trend?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
