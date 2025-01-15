<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListDatasetImportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DatasetImportJobArn
 * @property string|null $DatasetImportJobName
 * @property DataSource|null $DataSource
 * @property string|null $Status
 * @property string|null $Message
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModificationTime
 * @property 'FULL'|'INCREMENTAL'|null $ImportMode
 */
class DatasetImportJobSummary extends Shape
{
    /**
     * @param array{
     *     DatasetImportJobArn?: string|null,
     *     DatasetImportJobName?: string|null,
     *     DataSource?: DataSource|null,
     *     Status?: string|null,
     *     Message?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModificationTime?: \Aws\Api\DateTimeResult|null,
     *     ImportMode?: 'FULL'|'INCREMENTAL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
