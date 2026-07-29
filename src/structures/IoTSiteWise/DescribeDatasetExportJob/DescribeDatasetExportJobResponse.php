<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeDatasetExportJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $jobId
 * @property string $workspaceName
 * @property 'SUBMITTED'|'RUNNING'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'FAILED' $status
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property \Aws\Api\DateTimeResult|null $completedAt
 * @property string $destinationS3Uri
 * @property Shapes\ExportErrorReportLocation $errorReportLocation
 * @property Shapes\ProcessingInput $input
 */
class DescribeDatasetExportJobResponse extends Response
{
}
