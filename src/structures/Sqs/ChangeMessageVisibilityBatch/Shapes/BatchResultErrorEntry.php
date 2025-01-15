<?php

namespace Sunaoka\Aws\Structures\Sqs\ChangeMessageVisibilityBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property bool $SenderFault
 * @property string $Code
 * @property string|null $Message
 */
class BatchResultErrorEntry extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     SenderFault: bool,
     *     Code: string,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
