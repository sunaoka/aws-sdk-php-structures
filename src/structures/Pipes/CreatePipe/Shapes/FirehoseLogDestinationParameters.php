<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeliveryStreamArn
 */
class FirehoseLogDestinationParameters extends Shape
{
    /**
     * @param array{DeliveryStreamArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
