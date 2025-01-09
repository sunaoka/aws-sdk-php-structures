<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ExportTableToPointInTime;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TableArn
 * @property \Aws\Api\DateTimeResult $ExportTime
 * @property string $ClientToken
 * @property string $S3Bucket
 * @property string $S3BucketOwner
 * @property string $S3Prefix
 * @property 'AES256'|'KMS' $S3SseAlgorithm
 * @property string $S3SseKmsKeyId
 * @property 'DYNAMODB_JSON'|'ION' $ExportFormat
 * @property 'FULL_EXPORT'|'INCREMENTAL_EXPORT' $ExportType
 * @property Shapes\IncrementalExportSpecification $IncrementalExportSpecification
 */
class ExportTableToPointInTimeRequest extends Request
{
    /**
     * @param array{
     *     TableArn: string,
     *     ExportTime?: \Aws\Api\DateTimeResult,
     *     ClientToken?: string,
     *     S3Bucket: string,
     *     S3BucketOwner?: string,
     *     S3Prefix?: string,
     *     S3SseAlgorithm?: 'AES256'|'KMS',
     *     S3SseKmsKeyId?: string,
     *     ExportFormat?: 'DYNAMODB_JSON'|'ION',
     *     ExportType?: 'FULL_EXPORT'|'INCREMENTAL_EXPORT',
     *     IncrementalExportSpecification?: Shapes\IncrementalExportSpecification
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
