<?php

namespace Sunaoka\Aws\Structures\Pipes\DescribePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $BatchSize
 * @property DeadLetterConfig $DeadLetterConfig
 * @property 'AUTOMATIC_BISECT' $OnPartialBatchItemFailure
 * @property int $MaximumBatchingWindowInSeconds
 * @property int $MaximumRecordAgeInSeconds
 * @property int $MaximumRetryAttempts
 * @property int $ParallelizationFactor
 * @property 'TRIM_HORIZON'|'LATEST'|'AT_TIMESTAMP' $StartingPosition
 * @property \Aws\Api\DateTimeResult $StartingPositionTimestamp
 */
class PipeSourceKinesisStreamParameters extends Shape
{
    /**
     * @param array{
     *     BatchSize?: int,
     *     DeadLetterConfig?: DeadLetterConfig,
     *     OnPartialBatchItemFailure?: 'AUTOMATIC_BISECT',
     *     MaximumBatchingWindowInSeconds?: int,
     *     MaximumRecordAgeInSeconds?: int,
     *     MaximumRetryAttempts?: int,
     *     ParallelizationFactor?: int,
     *     StartingPosition: 'TRIM_HORIZON'|'LATEST'|'AT_TIMESTAMP',
     *     StartingPositionTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
