<?php

namespace Sunaoka\Aws\Structures\Pipes\UpdatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 10000> $BatchSize
 * @property DeadLetterConfig $DeadLetterConfig
 * @property 'AUTOMATIC_BISECT' $OnPartialBatchItemFailure
 * @property int<0, 300> $MaximumBatchingWindowInSeconds
 * @property int<-1, 604800> $MaximumRecordAgeInSeconds
 * @property int<-1, 10000> $MaximumRetryAttempts
 * @property int<1, 10> $ParallelizationFactor
 */
class UpdatePipeSourceKinesisStreamParameters extends Shape
{
    /**
     * @param array{
     *     BatchSize?: int<1, 10000>,
     *     DeadLetterConfig?: DeadLetterConfig,
     *     OnPartialBatchItemFailure?: 'AUTOMATIC_BISECT',
     *     MaximumBatchingWindowInSeconds?: int<0, 300>,
     *     MaximumRecordAgeInSeconds?: int<-1, 604800>,
     *     MaximumRetryAttempts?: int<-1, 10000>,
     *     ParallelizationFactor?: int<1, 10>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
