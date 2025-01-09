<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConfigurationAggregators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConfigurationAggregatorName
 * @property string $ConfigurationAggregatorArn
 * @property list<AccountAggregationSource> $AccountAggregationSources
 * @property OrganizationAggregationSource $OrganizationAggregationSource
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property string $CreatedBy
 * @property AggregatorFilters $AggregatorFilters
 */
class ConfigurationAggregator extends Shape
{
    /**
     * @param array{
     *     ConfigurationAggregatorName?: string,
     *     ConfigurationAggregatorArn?: string,
     *     AccountAggregationSources?: list<AccountAggregationSource>,
     *     OrganizationAggregationSource?: OrganizationAggregationSource,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     CreatedBy?: string,
     *     AggregatorFilters?: AggregatorFilters
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
