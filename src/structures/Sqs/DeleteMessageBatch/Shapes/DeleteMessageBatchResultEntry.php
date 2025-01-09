<?php

namespace Sunaoka\Aws\Structures\Sqs\DeleteMessageBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 */
class DeleteMessageBatchResultEntry extends Shape
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
