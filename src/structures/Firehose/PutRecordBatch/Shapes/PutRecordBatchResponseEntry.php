<?php

namespace Sunaoka\Aws\Structures\Firehose\PutRecordBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RecordId
 * @property string $ErrorCode
 * @property string $ErrorMessage
 */
class PutRecordBatchResponseEntry extends Shape
{
    /**
     * @param array{
     *     RecordId?: string,
     *     ErrorCode?: string,
     *     ErrorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
