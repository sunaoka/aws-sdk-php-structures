<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListDatasetImportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatasetImportJobArn
 * @property string $DatasetImportJobName
 * @property DataSource $DataSource
 * @property string $Status
 * @property string $Message
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModificationTime
 * @property 'FULL'|'INCREMENTAL' $ImportMode
 */
class DatasetImportJobSummary extends Shape
{
    /**
     * @param array{
     *     DatasetImportJobArn?: string,
     *     DatasetImportJobName?: string,
     *     DataSource?: DataSource,
     *     Status?: string,
     *     Message?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastModificationTime?: \Aws\Api\DateTimeResult,
     *     ImportMode?: 'FULL'|'INCREMENTAL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
