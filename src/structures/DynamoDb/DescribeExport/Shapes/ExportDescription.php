<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeExport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ExportArn
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED'|null $ExportStatus
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property string|null $ExportManifest
 * @property string|null $TableArn
 * @property string|null $TableId
 * @property \Aws\Api\DateTimeResult|null $ExportTime
 * @property string|null $ClientToken
 * @property string|null $S3Bucket
 * @property string|null $S3BucketOwner
 * @property string|null $S3Prefix
 * @property 'AES256'|'KMS'|null $S3SseAlgorithm
 * @property string|null $S3SseKmsKeyId
 * @property string|null $FailureCode
 * @property string|null $FailureMessage
 * @property 'DYNAMODB_JSON'|'ION'|null $ExportFormat
 * @property int<0, max>|null $BilledSizeBytes
 * @property int<0, max>|null $ItemCount
 * @property 'FULL_EXPORT'|'INCREMENTAL_EXPORT'|null $ExportType
 * @property IncrementalExportSpecification|null $IncrementalExportSpecification
 */
class ExportDescription extends Shape
{
    /**
     * @param array{
     *     ExportArn?: string|null,
     *     ExportStatus?: 'IN_PROGRESS'|'COMPLETED'|'FAILED'|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     ExportManifest?: string|null,
     *     TableArn?: string|null,
     *     TableId?: string|null,
     *     ExportTime?: \Aws\Api\DateTimeResult|null,
     *     ClientToken?: string|null,
     *     S3Bucket?: string|null,
     *     S3BucketOwner?: string|null,
     *     S3Prefix?: string|null,
     *     S3SseAlgorithm?: 'AES256'|'KMS'|null,
     *     S3SseKmsKeyId?: string|null,
     *     FailureCode?: string|null,
     *     FailureMessage?: string|null,
     *     ExportFormat?: 'DYNAMODB_JSON'|'ION'|null,
     *     BilledSizeBytes?: int<0, max>|null,
     *     ItemCount?: int<0, max>|null,
     *     ExportType?: 'FULL_EXPORT'|'INCREMENTAL_EXPORT'|null,
     *     IncrementalExportSpecification?: IncrementalExportSpecification|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
