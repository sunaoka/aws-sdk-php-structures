<?php

namespace Sunaoka\Aws\Structures\Sqs\SendMessageBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property bool $SenderFault
 * @property string $Code
 * @property string $Message
 */
class BatchResultErrorEntry extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     SenderFault: bool,
     *     Code: string,
     *     Message?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
