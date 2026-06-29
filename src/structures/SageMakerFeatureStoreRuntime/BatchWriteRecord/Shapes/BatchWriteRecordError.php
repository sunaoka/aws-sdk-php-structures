<?php

namespace Sunaoka\Aws\Structures\SageMakerFeatureStoreRuntime\BatchWriteRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BatchWriteRecordEntry $Entry
 * @property string $ErrorCode
 * @property string $ErrorMessage
 */
class BatchWriteRecordError extends Shape
{
    /**
     * @param array{
     *     Entry: BatchWriteRecordEntry,
     *     ErrorCode: string,
     *     ErrorMessage: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
