<?php

namespace Sunaoka\Aws\Structures\Pipes\UpdatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $BatchSize
 * @property DeadLetterConfig $DeadLetterConfig
 * @property 'AUTOMATIC_BISECT' $OnPartialBatchItemFailure
 * @property int $MaximumBatchingWindowInSeconds
 * @property int $MaximumRecordAgeInSeconds
 * @property int $MaximumRetryAttempts
 * @property int $ParallelizationFactor
 */
class UpdatePipeSourceKinesisStreamParameters extends Shape
{
    /**
     * @param array{
     *     BatchSize?: int,
     *     DeadLetterConfig?: DeadLetterConfig,
     *     OnPartialBatchItemFailure?: 'AUTOMATIC_BISECT',
     *     MaximumBatchingWindowInSeconds?: int,
     *     MaximumRecordAgeInSeconds?: int,
     *     MaximumRetryAttempts?: int,
     *     ParallelizationFactor?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
