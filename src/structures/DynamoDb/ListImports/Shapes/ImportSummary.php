<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ListImports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ImportArn
 * @property 'IN_PROGRESS'|'COMPLETED'|'CANCELLING'|'CANCELLED'|'FAILED'|null $ImportStatus
 * @property string|null $TableArn
 * @property S3BucketSource|null $S3BucketSource
 * @property string|null $CloudWatchLogGroupArn
 * @property 'DYNAMODB_JSON'|'ION'|'CSV'|null $InputFormat
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 */
class ImportSummary extends Shape
{
    /**
     * @param array{
     *     ImportArn?: string|null,
     *     ImportStatus?: 'IN_PROGRESS'|'COMPLETED'|'CANCELLING'|'CANCELLED'|'FAILED'|null,
     *     TableArn?: string|null,
     *     S3BucketSource?: S3BucketSource|null,
     *     CloudWatchLogGroupArn?: string|null,
     *     InputFormat?: 'DYNAMODB_JSON'|'ION'|'CSV'|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
