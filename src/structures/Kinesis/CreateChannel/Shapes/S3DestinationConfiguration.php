<?php

namespace Sunaoka\Aws\Structures\Kinesis\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $DataFreshnessInSeconds
 * @property DeadLetterQueueS3Configuration|null $DeadLetterQueueS3Configuration
 * @property S3StorageConfiguration $StorageConfiguration
 */
class S3DestinationConfiguration extends Shape
{
    /**
     * @param array{
     *     DataFreshnessInSeconds?: int|null,
     *     DeadLetterQueueS3Configuration?: DeadLetterQueueS3Configuration|null,
     *     StorageConfiguration: S3StorageConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
