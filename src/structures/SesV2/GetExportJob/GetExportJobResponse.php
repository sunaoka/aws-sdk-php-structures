<?php

namespace Sunaoka\Aws\Structures\SesV2\GetExportJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $JobId
 * @property 'METRICS_DATA'|'MESSAGE_INSIGHTS' $ExportSourceType
 * @property 'CREATED'|'PROCESSING'|'COMPLETED'|'FAILED'|'CANCELLED' $JobStatus
 * @property Shapes\ExportDestination $ExportDestination
 * @property Shapes\ExportDataSource $ExportDataSource
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $CompletedTimestamp
 * @property Shapes\FailureInfo $FailureInfo
 * @property Shapes\ExportStatistics $Statistics
 */
class GetExportJobResponse extends Response
{
}
