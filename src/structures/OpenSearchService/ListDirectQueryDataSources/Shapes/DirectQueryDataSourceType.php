<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListDirectQueryDataSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchDirectQueryDataSource|null $CloudWatchLog
 * @property SecurityLakeDirectQueryDataSource|null $SecurityLake
 */
class DirectQueryDataSourceType extends Shape
{
    /**
     * @param array{
     *     CloudWatchLog?: CloudWatchDirectQueryDataSource|null,
     *     SecurityLake?: SecurityLakeDirectQueryDataSource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
