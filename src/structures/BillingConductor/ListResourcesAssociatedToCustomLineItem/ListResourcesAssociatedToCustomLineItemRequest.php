<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListResourcesAssociatedToCustomLineItem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $BillingPeriod
 * @property string $Arn
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property Shapes\ListResourcesAssociatedToCustomLineItemFilter|null $Filters
 */
class ListResourcesAssociatedToCustomLineItemRequest extends Request
{
    /**
     * @param array{
     *     BillingPeriod?: string|null,
     *     Arn: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     Filters?: Shapes\ListResourcesAssociatedToCustomLineItemFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
