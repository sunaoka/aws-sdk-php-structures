<?php

namespace Sunaoka\Aws\Structures\Pricing\ListPriceLists;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceCode
 * @property \Aws\Api\DateTimeResult $EffectiveDate
 * @property string $RegionCode
 * @property string $CurrencyCode
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListPriceListsRequest extends Request
{
    /**
     * @param array{
     *     ServiceCode: string,
     *     EffectiveDate: \Aws\Api\DateTimeResult,
     *     RegionCode?: string,
     *     CurrencyCode: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
