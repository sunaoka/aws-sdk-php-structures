<?php

namespace Sunaoka\Aws\Structures\ApplicationCostProfiler\ListReportDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $reportId
 * @property string $reportDescription
 * @property 'MONTHLY'|'DAILY'|'ALL' $reportFrequency
 * @property 'CSV'|'PARQUET' $format
 * @property S3Location $destinationS3Location
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 */
class ReportDefinition extends Shape
{
    /**
     * @param array{
     *     reportId?: string,
     *     reportDescription?: string,
     *     reportFrequency?: 'MONTHLY'|'DAILY'|'ALL',
     *     format?: 'CSV'|'PARQUET',
     *     destinationS3Location?: S3Location,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
