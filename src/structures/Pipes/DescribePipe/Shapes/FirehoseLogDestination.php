<?php

namespace Sunaoka\Aws\Structures\Pipes\DescribePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeliveryStreamArn
 */
class FirehoseLogDestination extends Shape
{
    /**
     * @param array{DeliveryStreamArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
