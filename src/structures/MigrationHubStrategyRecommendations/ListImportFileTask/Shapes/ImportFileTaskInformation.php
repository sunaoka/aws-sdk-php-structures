<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListImportFileTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

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
class ImportFileTaskInformation extends Shape
{
    /**
     * @param array{
     *     completionTime?: \Aws\Api\DateTimeResult|null,
     *     id?: string|null,
     *     importName?: string|null,
     *     inputS3Bucket?: string|null,
     *     inputS3Key?: string|null,
     *     numberOfRecordsFailed?: int|null,
     *     numberOfRecordsSuccess?: int|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     status?: 'ImportInProgress'|'ImportFailed'|'ImportPartialSuccess'|'ImportSuccess'|'DeleteInProgress'|'DeleteFailed'|'DeletePartialSuccess'|'DeleteSuccess'|null,
     *     statusReportS3Bucket?: string|null,
     *     statusReportS3Key?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
