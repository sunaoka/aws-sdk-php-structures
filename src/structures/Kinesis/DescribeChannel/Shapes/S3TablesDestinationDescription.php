<?php

namespace Sunaoka\Aws\Structures\Kinesis\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DataFreshnessInSeconds
 * @property DeadLetterQueueS3Configuration $DeadLetterQueueS3Configuration
 * @property list<S3TablesConfiguration> $S3TablesConfigurationList
 */
class S3TablesDestinationDescription extends Shape
{
    /**
     * @param array{
     *     DataFreshnessInSeconds: int,
     *     DeadLetterQueueS3Configuration: DeadLetterQueueS3Configuration,
     *     S3TablesConfigurationList: list<S3TablesConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
