<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeAggregateComplianceByConformancePacks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationAggregatorName
 * @property Shapes\AggregateConformancePackComplianceFilters $Filters
 * @property int $Limit
 * @property string $NextToken
 */
class DescribeAggregateComplianceByConformancePacksRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationAggregatorName: string,
     *     Filters?: Shapes\AggregateConformancePackComplianceFilters,
     *     Limit?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
