<?php

namespace Sunaoka\Aws\Structures\Pipes\DescribePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 10000>|null $BatchSize
 * @property DeadLetterConfig|null $DeadLetterConfig
 * @property 'AUTOMATIC_BISECT'|null $OnPartialBatchItemFailure
 * @property int<0, 300>|null $MaximumBatchingWindowInSeconds
 * @property int<-1, 604800>|null $MaximumRecordAgeInSeconds
 * @property int<-1, 10000>|null $MaximumRetryAttempts
 * @property int<1, 10>|null $ParallelizationFactor
 * @property 'TRIM_HORIZON'|'LATEST' $StartingPosition
 */
class PipeSourceDynamoDBStreamParameters extends Shape
{
    /**
     * @param array{
     *     BatchSize?: int<1, 10000>|null,
     *     DeadLetterConfig?: DeadLetterConfig|null,
     *     OnPartialBatchItemFailure?: 'AUTOMATIC_BISECT'|null,
     *     MaximumBatchingWindowInSeconds?: int<0, 300>|null,
     *     MaximumRecordAgeInSeconds?: int<-1, 604800>|null,
     *     MaximumRetryAttempts?: int<-1, 10000>|null,
     *     ParallelizationFactor?: int<1, 10>|null,
     *     StartingPosition: 'TRIM_HORIZON'|'LATEST'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
