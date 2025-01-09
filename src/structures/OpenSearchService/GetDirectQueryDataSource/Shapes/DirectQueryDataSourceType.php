<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\GetDirectQueryDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchDirectQueryDataSource $CloudWatchLog
 * @property SecurityLakeDirectQueryDataSource $SecurityLake
 */
class DirectQueryDataSourceType extends Shape
{
    /**
     * @param array{
     *     CloudWatchLog?: CloudWatchDirectQueryDataSource,
     *     SecurityLake?: SecurityLakeDirectQueryDataSource
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
