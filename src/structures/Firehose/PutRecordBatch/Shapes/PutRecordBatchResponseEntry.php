<?php

namespace Sunaoka\Aws\Structures\Firehose\PutRecordBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RecordId
 * @property string|null $ErrorCode
 * @property string|null $ErrorMessage
 */
class PutRecordBatchResponseEntry extends Shape
{
    /**
     * @param array{
     *     RecordId?: string|null,
     *     ErrorCode?: string|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
