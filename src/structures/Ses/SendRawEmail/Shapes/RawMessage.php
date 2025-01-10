<?php

namespace Sunaoka\Aws\Structures\Ses\SendRawEmail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $Data
 */
class RawMessage extends Shape
{
    /**
     * @param array{Data: string|resource|\Psr\Http\Message\StreamInterface} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
