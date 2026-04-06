<?php

namespace Sunaoka\Aws\Structures\ConnectCases\UpdateField\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TextAttributes|null $text
 */
class FieldAttributes extends Shape
{
    /**
     * @param array{text?: TextAttributes|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
