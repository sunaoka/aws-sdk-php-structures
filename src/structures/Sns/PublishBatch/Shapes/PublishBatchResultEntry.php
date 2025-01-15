<?php

namespace Sunaoka\Aws\Structures\Sns\PublishBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $MessageId
 * @property string|null $SequenceNumber
 */
class PublishBatchResultEntry extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     MessageId?: string|null,
     *     SequenceNumber?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
