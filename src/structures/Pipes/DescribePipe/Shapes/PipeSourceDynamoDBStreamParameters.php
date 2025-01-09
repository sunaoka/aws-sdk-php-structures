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
 * @property 'TRIM_HORIZON'|'LATEST' $StartingPosition
 */
class PipeSourceDynamoDBStreamParameters extends Shape
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
     *     StartingPosition: 'TRIM_HORIZON'|'LATEST'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
