<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableRecordExpirationJobStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'NotYetRun'|'Successful'|'Failed'|'Disabled' $status
 * @property \Aws\Api\DateTimeResult|null $lastRunTimestamp
 * @property string|null $failureMessage
 * @property Shapes\TableRecordExpirationJobMetrics|null $metrics
 */
class GetTableRecordExpirationJobStatusResponse extends Response
{
}
