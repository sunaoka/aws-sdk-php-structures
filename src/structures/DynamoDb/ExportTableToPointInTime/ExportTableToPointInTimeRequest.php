<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ExportTableToPointInTime;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TableArn
 * @property \Aws\Api\DateTimeResult|null $ExportTime
 * @property string|null $ClientToken
 * @property string $S3Bucket
 * @property string|null $S3BucketOwner
 * @property string|null $S3Prefix
 * @property 'AES256'|'KMS'|null $S3SseAlgorithm
 * @property string|null $S3SseKmsKeyId
 * @property 'DYNAMODB_JSON'|'ION'|null $ExportFormat
 * @property 'FULL_EXPORT'|'INCREMENTAL_EXPORT'|null $ExportType
 * @property Shapes\IncrementalExportSpecification|null $IncrementalExportSpecification
 * @property Shapes\FilterSpecification|null $FilterSpecification
 */
class ExportTableToPointInTimeRequest extends Request
{
    /**
     * @param array{
     *     TableArn: string,
     *     ExportTime?: \Aws\Api\DateTimeResult|null,
     *     ClientToken?: string|null,
     *     S3Bucket: string,
     *     S3BucketOwner?: string|null,
     *     S3Prefix?: string|null,
     *     S3SseAlgorithm?: 'AES256'|'KMS'|null,
     *     S3SseKmsKeyId?: string|null,
     *     ExportFormat?: 'DYNAMODB_JSON'|'ION'|null,
     *     ExportType?: 'FULL_EXPORT'|'INCREMENTAL_EXPORT'|null,
     *     IncrementalExportSpecification?: Shapes\IncrementalExportSpecification|null,
     *     FilterSpecification?: Shapes\FilterSpecification|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
