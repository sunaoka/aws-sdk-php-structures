<?php

namespace Sunaoka\Aws\Structures\Ses\SendRawEmail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Data
 */
class RawMessage extends Shape
{
    /**
     * @param array{Data: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
