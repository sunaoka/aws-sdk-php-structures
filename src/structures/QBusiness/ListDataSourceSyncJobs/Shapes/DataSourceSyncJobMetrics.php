<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListDataSourceSyncJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $documentsAdded
 * @property string|null $documentsModified
 * @property string|null $documentsDeleted
 * @property string|null $documentsFailed
 * @property string|null $documentsScanned
 */
class DataSourceSyncJobMetrics extends Shape
{
    /**
     * @param array{
     *     documentsAdded?: string|null,
     *     documentsModified?: string|null,
     *     documentsDeleted?: string|null,
     *     documentsFailed?: string|null,
     *     documentsScanned?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
