<?php

namespace Sunaoka\Aws\Structures\kendra\ListDataSourceSyncJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DocumentsAdded
 * @property string $DocumentsModified
 * @property string $DocumentsDeleted
 * @property string $DocumentsFailed
 * @property string $DocumentsScanned
 */
class DataSourceSyncJobMetrics extends Shape
{
    /**
     * @param array{
     *     DocumentsAdded?: string,
     *     DocumentsModified?: string,
     *     DocumentsDeleted?: string,
     *     DocumentsFailed?: string,
     *     DocumentsScanned?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
