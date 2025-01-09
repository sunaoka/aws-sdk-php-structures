<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeExport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ExportArn
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED' $ExportStatus
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property string $ExportManifest
 * @property string $TableArn
 * @property string $TableId
 * @property \Aws\Api\DateTimeResult $ExportTime
 * @property string $ClientToken
 * @property string $S3Bucket
 * @property string $S3BucketOwner
 * @property string $S3Prefix
 * @property 'AES256'|'KMS' $S3SseAlgorithm
 * @property string $S3SseKmsKeyId
 * @property string $FailureCode
 * @property string $FailureMessage
 * @property 'DYNAMODB_JSON'|'ION' $ExportFormat
 * @property int $BilledSizeBytes
 * @property int $ItemCount
 * @property 'FULL_EXPORT'|'INCREMENTAL_EXPORT' $ExportType
 * @property IncrementalExportSpecification $IncrementalExportSpecification
 */
class ExportDescription extends Shape
{
    /**
     * @param array{
     *     ExportArn?: string,
     *     ExportStatus?: 'IN_PROGRESS'|'COMPLETED'|'FAILED',
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     ExportManifest?: string,
     *     TableArn?: string,
     *     TableId?: string,
     *     ExportTime?: \Aws\Api\DateTimeResult,
     *     ClientToken?: string,
     *     S3Bucket?: string,
     *     S3BucketOwner?: string,
     *     S3Prefix?: string,
     *     S3SseAlgorithm?: 'AES256'|'KMS',
     *     S3SseKmsKeyId?: string,
     *     FailureCode?: string,
     *     FailureMessage?: string,
     *     ExportFormat?: 'DYNAMODB_JSON'|'ION',
     *     BilledSizeBytes?: int,
     *     ItemCount?: int,
     *     ExportType?: 'FULL_EXPORT'|'INCREMENTAL_EXPORT',
     *     IncrementalExportSpecification?: IncrementalExportSpecification
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
