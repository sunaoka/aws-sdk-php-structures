<?php

namespace Sunaoka\Aws\Structures\SesV2\GetExportJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $JobId
 * @property 'METRICS_DATA'|'MESSAGE_INSIGHTS'|null $ExportSourceType
 * @property 'CREATED'|'PROCESSING'|'COMPLETED'|'FAILED'|'CANCELLED'|null $JobStatus
 * @property Shapes\ExportDestination|null $ExportDestination
 * @property Shapes\ExportDataSource|null $ExportDataSource
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $CompletedTimestamp
 * @property Shapes\FailureInfo|null $FailureInfo
 * @property Shapes\ExportStatistics|null $Statistics
 */
class GetExportJobResponse extends Response
{
}
