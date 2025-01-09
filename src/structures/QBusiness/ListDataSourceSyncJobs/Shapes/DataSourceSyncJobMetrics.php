<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListDataSourceSyncJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $documentsAdded
 * @property string $documentsModified
 * @property string $documentsDeleted
 * @property string $documentsFailed
 * @property string $documentsScanned
 */
class DataSourceSyncJobMetrics extends Shape
{
    /**
     * @param array{
     *     documentsAdded?: string,
     *     documentsModified?: string,
     *     documentsDeleted?: string,
     *     documentsFailed?: string,
     *     documentsScanned?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
