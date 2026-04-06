<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListDirectQueryDataSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchDirectQueryDataSource|null $CloudWatchLog
 * @property SecurityLakeDirectQueryDataSource|null $SecurityLake
 * @property PrometheusDirectQueryDataSource|null $Prometheus
 */
class DirectQueryDataSourceType extends Shape
{
    /**
     * @param array{
     *     CloudWatchLog?: CloudWatchDirectQueryDataSource|null,
     *     SecurityLake?: SecurityLakeDirectQueryDataSource|null,
     *     Prometheus?: PrometheusDirectQueryDataSource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
