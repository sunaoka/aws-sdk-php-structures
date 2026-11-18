<?php

namespace Sunaoka\Aws\Structures\Kinesis\AcknowledgeQueueRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReceiptHandle
 */
class AcknowledgeQueueRecordsResultEntry extends Shape
{
    /**
     * @param array{ReceiptHandle: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
