<?php

namespace Sunaoka\Aws\Structures\Kinesis\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $DataFreshnessInSeconds
 * @property DeadLetterQueueS3Configuration $DeadLetterQueueS3Configuration
 * @property list<S3TablesConfiguration> $S3TablesConfigurationList
 */
class S3TablesDestinationConfiguration extends Shape
{
    /**
     * @param array{
     *     DataFreshnessInSeconds?: int|null,
     *     DeadLetterQueueS3Configuration: DeadLetterQueueS3Configuration,
     *     S3TablesConfigurationList: list<S3TablesConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
