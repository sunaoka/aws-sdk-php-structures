<?php

namespace Sunaoka\Aws\Structures\ApplicationCostProfiler\GetReportDefinition;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $reportId
 * @property string $reportDescription
 * @property 'MONTHLY'|'DAILY'|'ALL' $reportFrequency
 * @property 'CSV'|'PARQUET' $format
 * @property Shapes\S3Location $destinationS3Location
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdated
 */
class GetReportDefinitionResponse extends Response
{
}
