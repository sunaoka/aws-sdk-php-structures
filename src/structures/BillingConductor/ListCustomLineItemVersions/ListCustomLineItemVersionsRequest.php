<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListCustomLineItemVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property Shapes\ListCustomLineItemVersionsFilter|null $Filters
 */
class ListCustomLineItemVersionsRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     Filters?: Shapes\ListCustomLineItemVersionsFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
