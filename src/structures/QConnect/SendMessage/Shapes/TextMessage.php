<?php

namespace Sunaoka\Aws\Structures\QConnect\SendMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $value
 */
class TextMessage extends Shape
{
    /**
     * @param array{value?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
