<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListResourcesAssociatedToCustomLineItem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BillingPeriod
 * @property string $Arn
 * @property int $MaxResults
 * @property string $NextToken
 * @property Shapes\ListResourcesAssociatedToCustomLineItemFilter $Filters
 */
class ListResourcesAssociatedToCustomLineItemRequest extends Request
{
    /**
     * @param array{
     *     BillingPeriod?: string,
     *     Arn: string,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     Filters?: Shapes\ListResourcesAssociatedToCustomLineItemFilter
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
