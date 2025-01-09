<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListResolverQueryLogConfigs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxResults
 * @property string $NextToken
 * @property list<Shapes\Filter> $Filters
 * @property string $SortBy
 * @property 'ASCENDING'|'DESCENDING' $SortOrder
 */
class ListResolverQueryLogConfigsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int,
     *     NextToken?: string,
     *     Filters?: list<Shapes\Filter>,
     *     SortBy?: string,
     *     SortOrder?: 'ASCENDING'|'DESCENDING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
