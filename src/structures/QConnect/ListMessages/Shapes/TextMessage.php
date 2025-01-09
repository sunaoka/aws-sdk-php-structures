<?php

namespace Sunaoka\Aws\Structures\QConnect\ListMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $value
 */
class TextMessage extends Shape
{
    /**
     * @param array{value?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
