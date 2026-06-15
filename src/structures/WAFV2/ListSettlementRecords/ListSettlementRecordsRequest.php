<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListSettlementRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\TimeWindow $TimeWindow
 * @property 'CLOUDFRONT'|'REGIONAL' $Scope
 * @property 'USDC' $Currency
 * @property list<Shapes\MonetizationFilter>|null $Filters
 * @property 'TIMESTAMP'|'AMOUNT'|'NAME'|'STATUS'|null $SortBy
 * @property 'ASC'|'DESC'|null $SortOrder
 * @property int<1, 100>|null $Limit
 * @property string|null $NextMarker
 */
class ListSettlementRecordsRequest extends Request
{
    /**
     * @param array{
     *     TimeWindow: Shapes\TimeWindow,
     *     Scope: 'CLOUDFRONT'|'REGIONAL',
     *     Currency: 'USDC',
     *     Filters?: list<Shapes\MonetizationFilter>|null,
     *     SortBy?: 'TIMESTAMP'|'AMOUNT'|'NAME'|'STATUS'|null,
     *     SortOrder?: 'ASC'|'DESC'|null,
     *     Limit?: int<1, 100>|null,
     *     NextMarker?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
