<?php

namespace Sunaoka\Aws\Structures\Kinesis\PutRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SequenceNumber
 * @property string $ShardId
 * @property string $ErrorCode
 * @property string $ErrorMessage
 */
class PutRecordsResultEntry extends Shape
{
    /**
     * @param array{
     *     SequenceNumber?: string,
     *     ShardId?: string,
     *     ErrorCode?: string,
     *     ErrorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
