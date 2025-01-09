<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\UpdateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sqlQuery
 * @property list<QueryFilter> $filters
 */
class SqlQueryDatasetAction extends Shape
{
    /**
     * @param array{
     *     sqlQuery: string,
     *     filters?: list<QueryFilter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
