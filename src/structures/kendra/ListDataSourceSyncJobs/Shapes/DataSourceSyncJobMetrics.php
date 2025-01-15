<?php

namespace Sunaoka\Aws\Structures\kendra\ListDataSourceSyncJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DocumentsAdded
 * @property string|null $DocumentsModified
 * @property string|null $DocumentsDeleted
 * @property string|null $DocumentsFailed
 * @property string|null $DocumentsScanned
 */
class DataSourceSyncJobMetrics extends Shape
{
    /**
     * @param array{
     *     DocumentsAdded?: string|null,
     *     DocumentsModified?: string|null,
     *     DocumentsDeleted?: string|null,
     *     DocumentsFailed?: string|null,
     *     DocumentsScanned?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
