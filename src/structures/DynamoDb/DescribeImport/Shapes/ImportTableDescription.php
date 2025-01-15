<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeImport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ImportArn
 * @property 'IN_PROGRESS'|'COMPLETED'|'CANCELLING'|'CANCELLED'|'FAILED'|null $ImportStatus
 * @property string|null $TableArn
 * @property string|null $TableId
 * @property string|null $ClientToken
 * @property S3BucketSource|null $S3BucketSource
 * @property int<0, max>|null $ErrorCount
 * @property string|null $CloudWatchLogGroupArn
 * @property 'DYNAMODB_JSON'|'ION'|'CSV'|null $InputFormat
 * @property InputFormatOptions|null $InputFormatOptions
 * @property 'GZIP'|'ZSTD'|'NONE'|null $InputCompressionType
 * @property TableCreationParameters|null $TableCreationParameters
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property int|null $ProcessedSizeBytes
 * @property int<0, max>|null $ProcessedItemCount
 * @property int<0, max>|null $ImportedItemCount
 * @property string|null $FailureCode
 * @property string|null $FailureMessage
 */
class ImportTableDescription extends Shape
{
    /**
     * @param array{
     *     ImportArn?: string|null,
     *     ImportStatus?: 'IN_PROGRESS'|'COMPLETED'|'CANCELLING'|'CANCELLED'|'FAILED'|null,
     *     TableArn?: string|null,
     *     TableId?: string|null,
     *     ClientToken?: string|null,
     *     S3BucketSource?: S3BucketSource|null,
     *     ErrorCount?: int<0, max>|null,
     *     CloudWatchLogGroupArn?: string|null,
     *     InputFormat?: 'DYNAMODB_JSON'|'ION'|'CSV'|null,
     *     InputFormatOptions?: InputFormatOptions|null,
     *     InputCompressionType?: 'GZIP'|'ZSTD'|'NONE'|null,
     *     TableCreationParameters?: TableCreationParameters|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     ProcessedSizeBytes?: int|null,
     *     ProcessedItemCount?: int<0, max>|null,
     *     ImportedItemCount?: int<0, max>|null,
     *     FailureCode?: string|null,
     *     FailureMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
