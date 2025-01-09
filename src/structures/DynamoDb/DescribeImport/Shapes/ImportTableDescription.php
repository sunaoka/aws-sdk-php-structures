<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeImport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ImportArn
 * @property 'IN_PROGRESS'|'COMPLETED'|'CANCELLING'|'CANCELLED'|'FAILED' $ImportStatus
 * @property string $TableArn
 * @property string $TableId
 * @property string $ClientToken
 * @property S3BucketSource $S3BucketSource
 * @property int $ErrorCount
 * @property string $CloudWatchLogGroupArn
 * @property 'DYNAMODB_JSON'|'ION'|'CSV' $InputFormat
 * @property InputFormatOptions $InputFormatOptions
 * @property 'GZIP'|'ZSTD'|'NONE' $InputCompressionType
 * @property TableCreationParameters $TableCreationParameters
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property int $ProcessedSizeBytes
 * @property int $ProcessedItemCount
 * @property int $ImportedItemCount
 * @property string $FailureCode
 * @property string $FailureMessage
 */
class ImportTableDescription extends Shape
{
    /**
     * @param array{
     *     ImportArn?: string,
     *     ImportStatus?: 'IN_PROGRESS'|'COMPLETED'|'CANCELLING'|'CANCELLED'|'FAILED',
     *     TableArn?: string,
     *     TableId?: string,
     *     ClientToken?: string,
     *     S3BucketSource?: S3BucketSource,
     *     ErrorCount?: int,
     *     CloudWatchLogGroupArn?: string,
     *     InputFormat?: 'DYNAMODB_JSON'|'ION'|'CSV',
     *     InputFormatOptions?: InputFormatOptions,
     *     InputCompressionType?: 'GZIP'|'ZSTD'|'NONE',
     *     TableCreationParameters?: TableCreationParameters,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     ProcessedSizeBytes?: int,
     *     ProcessedItemCount?: int,
     *     ImportedItemCount?: int,
     *     FailureCode?: string,
     *     FailureMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
