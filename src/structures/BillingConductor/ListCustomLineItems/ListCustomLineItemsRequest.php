<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListCustomLineItems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BillingPeriod
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 * @property Shapes\ListCustomLineItemsFilter $Filters
 */
class ListCustomLineItemsRequest extends Request
{
    /**
     * @param array{
     *     BillingPeriod?: string,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string,
     *     Filters?: Shapes\ListCustomLineItemsFilter
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
