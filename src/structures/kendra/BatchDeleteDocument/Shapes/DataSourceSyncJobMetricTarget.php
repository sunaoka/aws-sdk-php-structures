<?php

namespace Sunaoka\Aws\Structures\kendra\BatchDeleteDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataSourceId
 * @property string|null $DataSourceSyncJobId
 */
class DataSourceSyncJobMetricTarget extends Shape
{
    /**
     * @param array{
     *     DataSourceId: string,
     *     DataSourceSyncJobId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
