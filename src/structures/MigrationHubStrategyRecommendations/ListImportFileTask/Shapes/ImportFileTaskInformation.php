<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListImportFileTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

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
class ImportFileTaskInformation extends Shape
{
    /**
     * @param array{
     *     completionTime?: \Aws\Api\DateTimeResult,
     *     id?: string,
     *     importName?: string,
     *     inputS3Bucket?: string,
     *     inputS3Key?: string,
     *     numberOfRecordsFailed?: int,
     *     numberOfRecordsSuccess?: int,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     status?: 'ImportInProgress'|'ImportFailed'|'ImportPartialSuccess'|'ImportSuccess'|'DeleteInProgress'|'DeleteFailed'|'DeletePartialSuccess'|'DeleteSuccess',
     *     statusReportS3Bucket?: string,
     *     statusReportS3Key?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
