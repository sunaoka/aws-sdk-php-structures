<?php

namespace Sunaoka\Aws\Structures\Sns\PublishBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $MessageId
 * @property string $SequenceNumber
 */
class PublishBatchResultEntry extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     MessageId?: string,
     *     SequenceNumber?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
