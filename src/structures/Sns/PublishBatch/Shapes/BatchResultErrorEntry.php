<?php

namespace Sunaoka\Aws\Structures\Sns\PublishBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Code
 * @property string $Message
 * @property bool $SenderFault
 */
class BatchResultErrorEntry extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Code: string,
     *     Message?: string,
     *     SenderFault: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
