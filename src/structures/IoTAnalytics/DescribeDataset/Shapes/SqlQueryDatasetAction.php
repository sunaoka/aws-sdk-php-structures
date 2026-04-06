<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribeDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sqlQuery
 * @property list<QueryFilter>|null $filters
 */
class SqlQueryDatasetAction extends Shape
{
    /**
     * @param array{
     *     sqlQuery: string,
     *     filters?: list<QueryFilter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
