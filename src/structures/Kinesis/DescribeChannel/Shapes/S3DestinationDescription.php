<?php

namespace Sunaoka\Aws\Structures\Kinesis\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DataFreshnessInSeconds
 * @property DeadLetterQueueS3Configuration $DeadLetterQueueS3Configuration
 * @property S3StorageConfiguration $StorageConfiguration
 */
class S3DestinationDescription extends Shape
{
    /**
     * @param array{
     *     DataFreshnessInSeconds: int,
     *     DeadLetterQueueS3Configuration: DeadLetterQueueS3Configuration,
     *     StorageConfiguration: S3StorageConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
