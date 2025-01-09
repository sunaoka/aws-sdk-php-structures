<?php

namespace Sunaoka\Aws\Structures\kendra\BatchDeleteDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataSourceId
 * @property string $DataSourceSyncJobId
 */
class DataSourceSyncJobMetricTarget extends Shape
{
    /**
     * @param array{
     *     DataSourceId: string,
     *     DataSourceSyncJobId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
