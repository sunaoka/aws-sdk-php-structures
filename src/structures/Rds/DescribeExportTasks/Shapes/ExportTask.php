<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeExportTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ExportTaskIdentifier
 * @property string|null $SourceArn
 * @property list<string>|null $ExportOnly
 * @property \Aws\Api\DateTimeResult|null $SnapshotTime
 * @property \Aws\Api\DateTimeResult|null $TaskStartTime
 * @property \Aws\Api\DateTimeResult|null $TaskEndTime
 * @property string|null $S3Bucket
 * @property string|null $S3Prefix
 * @property string|null $IamRoleArn
 * @property string|null $KmsKeyId
 * @property string|null $Status
 * @property int|null $PercentProgress
 * @property int|null $TotalExtractedDataInGB
 * @property string|null $FailureCause
 * @property string|null $WarningMessage
 * @property 'SNAPSHOT'|'CLUSTER'|null $SourceType
 */
class ExportTask extends Shape
{
    /**
     * @param array{
     *     ExportTaskIdentifier?: string|null,
     *     SourceArn?: string|null,
     *     ExportOnly?: list<string>|null,
     *     SnapshotTime?: \Aws\Api\DateTimeResult|null,
     *     TaskStartTime?: \Aws\Api\DateTimeResult|null,
     *     TaskEndTime?: \Aws\Api\DateTimeResult|null,
     *     S3Bucket?: string|null,
     *     S3Prefix?: string|null,
     *     IamRoleArn?: string|null,
     *     KmsKeyId?: string|null,
     *     Status?: string|null,
     *     PercentProgress?: int|null,
     *     TotalExtractedDataInGB?: int|null,
     *     FailureCause?: string|null,
     *     WarningMessage?: string|null,
     *     SourceType?: 'SNAPSHOT'|'CLUSTER'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
