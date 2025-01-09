<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetAggregateDiscoveredResourceCounts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationAggregatorName
 * @property Shapes\ResourceCountFilters $Filters
 * @property 'RESOURCE_TYPE'|'ACCOUNT_ID'|'AWS_REGION' $GroupByKey
 * @property int $Limit
 * @property string $NextToken
 */
class GetAggregateDiscoveredResourceCountsRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationAggregatorName: string,
     *     Filters?: Shapes\ResourceCountFilters,
     *     GroupByKey?: 'RESOURCE_TYPE'|'ACCOUNT_ID'|'AWS_REGION',
     *     Limit?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
