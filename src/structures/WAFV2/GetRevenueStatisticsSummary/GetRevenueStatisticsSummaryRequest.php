<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetRevenueStatisticsSummary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\TimeWindow $TimeWindow
 * @property 'CLOUDFRONT'|'REGIONAL' $Scope
 * @property 'USDC' $Currency
 * @property list<Shapes\MonetizationFilter>|null $Filters
 */
class GetRevenueStatisticsSummaryRequest extends Request
{
    /**
     * @param array{
     *     TimeWindow: Shapes\TimeWindow,
     *     Scope: 'CLOUDFRONT'|'REGIONAL',
     *     Currency: 'USDC',
     *     Filters?: list<Shapes\MonetizationFilter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
