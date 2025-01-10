<?php

namespace Sunaoka\Aws\Structures\S3\SelectObjectContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Psr\Http\Message\StreamInterface $Payload
 */
class RecordsEvent extends Shape
{
    /**
     * @param array{Payload?: \Psr\Http\Message\StreamInterface} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
