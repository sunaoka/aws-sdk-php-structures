<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateGraphqlApi\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FULL_REQUEST_RESOLVER_METRICS'|'PER_RESOLVER_METRICS' $resolverLevelMetricsBehavior
 * @property 'FULL_REQUEST_DATA_SOURCE_METRICS'|'PER_DATA_SOURCE_METRICS' $dataSourceLevelMetricsBehavior
 * @property 'ENABLED'|'DISABLED' $operationLevelMetricsConfig
 */
class EnhancedMetricsConfig extends Shape
{
    /**
     * @param array{
     *     resolverLevelMetricsBehavior: 'FULL_REQUEST_RESOLVER_METRICS'|'PER_RESOLVER_METRICS',
     *     dataSourceLevelMetricsBehavior: 'FULL_REQUEST_DATA_SOURCE_METRICS'|'PER_DATA_SOURCE_METRICS',
     *     operationLevelMetricsConfig: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
