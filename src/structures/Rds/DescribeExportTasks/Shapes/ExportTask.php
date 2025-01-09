<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeExportTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ExportTaskIdentifier
 * @property string $SourceArn
 * @property list<string> $ExportOnly
 * @property \Aws\Api\DateTimeResult $SnapshotTime
 * @property \Aws\Api\DateTimeResult $TaskStartTime
 * @property \Aws\Api\DateTimeResult $TaskEndTime
 * @property string $S3Bucket
 * @property string $S3Prefix
 * @property string $IamRoleArn
 * @property string $KmsKeyId
 * @property string $Status
 * @property int $PercentProgress
 * @property int $TotalExtractedDataInGB
 * @property string $FailureCause
 * @property string $WarningMessage
 * @property 'SNAPSHOT'|'CLUSTER' $SourceType
 */
class ExportTask extends Shape
{
    /**
     * @param array{
     *     ExportTaskIdentifier?: string,
     *     SourceArn?: string,
     *     ExportOnly?: list<string>,
     *     SnapshotTime?: \Aws\Api\DateTimeResult,
     *     TaskStartTime?: \Aws\Api\DateTimeResult,
     *     TaskEndTime?: \Aws\Api\DateTimeResult,
     *     S3Bucket?: string,
     *     S3Prefix?: string,
     *     IamRoleArn?: string,
     *     KmsKeyId?: string,
     *     Status?: string,
     *     PercentProgress?: int,
     *     TotalExtractedDataInGB?: int,
     *     FailureCause?: string,
     *     WarningMessage?: string,
     *     SourceType?: 'SNAPSHOT'|'CLUSTER'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
