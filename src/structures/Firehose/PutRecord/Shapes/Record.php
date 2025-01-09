<?php

namespace Sunaoka\Aws\Structures\Firehose\PutRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Data
 */
class Record extends Shape
{
    /**
     * @param array{Data: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
