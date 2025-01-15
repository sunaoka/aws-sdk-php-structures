<?php

namespace Sunaoka\Aws\Structures\Pricing\ListPriceLists;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceCode
 * @property \Aws\Api\DateTimeResult $EffectiveDate
 * @property string|null $RegionCode
 * @property string $CurrencyCode
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListPriceListsRequest extends Request
{
    /**
     * @param array{
     *     ServiceCode: string,
     *     EffectiveDate: \Aws\Api\DateTimeResult,
     *     RegionCode?: string|null,
     *     CurrencyCode: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
