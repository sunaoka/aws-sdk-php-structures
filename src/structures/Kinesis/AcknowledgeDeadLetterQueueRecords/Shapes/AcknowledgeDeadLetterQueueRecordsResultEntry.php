<?php

namespace Sunaoka\Aws\Structures\Kinesis\AcknowledgeDeadLetterQueueRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReceiptHandle
 */
class AcknowledgeDeadLetterQueueRecordsResultEntry extends Shape
{
    /**
     * @param array{ReceiptHandle: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
