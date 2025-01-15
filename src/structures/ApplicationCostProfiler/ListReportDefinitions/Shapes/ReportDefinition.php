<?php

namespace Sunaoka\Aws\Structures\ApplicationCostProfiler\ListReportDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $reportId
 * @property string|null $reportDescription
 * @property 'MONTHLY'|'DAILY'|'ALL'|null $reportFrequency
 * @property 'CSV'|'PARQUET'|null $format
 * @property S3Location|null $destinationS3Location
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 */
class ReportDefinition extends Shape
{
    /**
     * @param array{
     *     reportId?: string|null,
     *     reportDescription?: string|null,
     *     reportFrequency?: 'MONTHLY'|'DAILY'|'ALL'|null,
     *     format?: 'CSV'|'PARQUET'|null,
     *     destinationS3Location?: S3Location|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
