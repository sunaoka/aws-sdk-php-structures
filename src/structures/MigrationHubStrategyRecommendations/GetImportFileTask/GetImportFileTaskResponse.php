<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetImportFileTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $completionTime
 * @property string|null $id
 * @property string|null $importName
 * @property string|null $inputS3Bucket
 * @property string|null $inputS3Key
 * @property int|null $numberOfRecordsFailed
 * @property int|null $numberOfRecordsSuccess
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property 'ImportInProgress'|'ImportFailed'|'ImportPartialSuccess'|'ImportSuccess'|'DeleteInProgress'|'DeleteFailed'|'DeletePartialSuccess'|'DeleteSuccess'|null $status
 * @property string|null $statusReportS3Bucket
 * @property string|null $statusReportS3Key
 */
class GetImportFileTaskResponse extends Response
{
}
