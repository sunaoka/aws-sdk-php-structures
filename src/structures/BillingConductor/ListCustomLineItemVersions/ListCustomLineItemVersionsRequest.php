<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListCustomLineItemVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 * @property Shapes\ListCustomLineItemVersionsFilter $Filters
 */
class ListCustomLineItemVersionsRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string,
     *     Filters?: Shapes\ListCustomLineItemVersionsFilter
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
