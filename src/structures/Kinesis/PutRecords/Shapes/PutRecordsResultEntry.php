<?php

namespace Sunaoka\Aws\Structures\Kinesis\PutRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SequenceNumber
 * @property string|null $ShardId
 * @property string|null $ErrorCode
 * @property string|null $ErrorMessage
 */
class PutRecordsResultEntry extends Shape
{
    /**
     * @param array{
     *     SequenceNumber?: string|null,
     *     ShardId?: string|null,
     *     ErrorCode?: string|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
