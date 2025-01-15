<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConfigurationAggregators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConfigurationAggregatorName
 * @property string|null $ConfigurationAggregatorArn
 * @property list<AccountAggregationSource>|null $AccountAggregationSources
 * @property OrganizationAggregationSource|null $OrganizationAggregationSource
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property string|null $CreatedBy
 * @property AggregatorFilters|null $AggregatorFilters
 */
class ConfigurationAggregator extends Shape
{
    /**
     * @param array{
     *     ConfigurationAggregatorName?: string|null,
     *     ConfigurationAggregatorArn?: string|null,
     *     AccountAggregationSources?: list<AccountAggregationSource>|null,
     *     OrganizationAggregationSource?: OrganizationAggregationSource|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     CreatedBy?: string|null,
     *     AggregatorFilters?: AggregatorFilters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
