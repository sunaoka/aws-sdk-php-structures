<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetImportFileTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $completionTime
 * @property string $id
 * @property string $importName
 * @property string $inputS3Bucket
 * @property string $inputS3Key
 * @property int $numberOfRecordsFailed
 * @property int $numberOfRecordsSuccess
 * @property \Aws\Api\DateTimeResult $startTime
 * @property 'ImportInProgress'|'ImportFailed'|'ImportPartialSuccess'|'ImportSuccess'|'DeleteInProgress'|'DeleteFailed'|'DeletePartialSuccess'|'DeleteSuccess' $status
 * @property string $statusReportS3Bucket
 * @property string $statusReportS3Key
 */
class GetImportFileTaskResponse extends Response
{
}
