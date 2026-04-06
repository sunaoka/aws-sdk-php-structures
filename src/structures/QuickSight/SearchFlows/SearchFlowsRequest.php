<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchFlows;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property list<Shapes\SearchFlowsFilter> $Filters
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class SearchFlowsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     Filters: list<Shapes\SearchFlowsFilter>,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
