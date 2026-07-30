<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $DataFreshnessInSeconds
 * @property DeadLetterQueueS3 $DeadLetterQueueS3
 * @property string $ServiceExecutionRoleArn
 * @property S3Storage $Storage
 */
class S3DestinationConfiguration extends Shape
{
    /**
     * @param array{
     *     DataFreshnessInSeconds?: int|null,
     *     DeadLetterQueueS3: DeadLetterQueueS3,
     *     ServiceExecutionRoleArn: string,
     *     Storage: S3Storage
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
