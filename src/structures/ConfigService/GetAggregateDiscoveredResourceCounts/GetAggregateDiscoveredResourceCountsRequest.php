<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetAggregateDiscoveredResourceCounts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationAggregatorName
 * @property Shapes\ResourceCountFilters|null $Filters
 * @property 'RESOURCE_TYPE'|'ACCOUNT_ID'|'AWS_REGION'|null $GroupByKey
 * @property int<0, 1000>|null $Limit
 * @property string|null $NextToken
 */
class GetAggregateDiscoveredResourceCountsRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationAggregatorName: string,
     *     Filters?: Shapes\ResourceCountFilters|null,
     *     GroupByKey?: 'RESOURCE_TYPE'|'ACCOUNT_ID'|'AWS_REGION'|null,
     *     Limit?: int<0, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
