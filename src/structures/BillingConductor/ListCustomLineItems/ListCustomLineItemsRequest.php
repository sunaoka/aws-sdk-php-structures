<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListCustomLineItems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $BillingPeriod
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property Shapes\ListCustomLineItemsFilter|null $Filters
 */
class ListCustomLineItemsRequest extends Request
{
    /**
     * @param array{
     *     BillingPeriod?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     Filters?: Shapes\ListCustomLineItemsFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
