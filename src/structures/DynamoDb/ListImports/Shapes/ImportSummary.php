<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ListImports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ImportArn
 * @property 'IN_PROGRESS'|'COMPLETED'|'CANCELLING'|'CANCELLED'|'FAILED' $ImportStatus
 * @property string $TableArn
 * @property S3BucketSource $S3BucketSource
 * @property string $CloudWatchLogGroupArn
 * @property 'DYNAMODB_JSON'|'ION'|'CSV' $InputFormat
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 */
class ImportSummary extends Shape
{
    /**
     * @param array{
     *     ImportArn?: string,
     *     ImportStatus?: 'IN_PROGRESS'|'COMPLETED'|'CANCELLING'|'CANCELLED'|'FAILED',
     *     TableArn?: string,
     *     S3BucketSource?: S3BucketSource,
     *     CloudWatchLogGroupArn?: string,
     *     InputFormat?: 'DYNAMODB_JSON'|'ION'|'CSV',
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
