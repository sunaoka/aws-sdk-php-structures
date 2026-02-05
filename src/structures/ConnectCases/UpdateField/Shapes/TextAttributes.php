<?php

namespace Sunaoka\Aws\Structures\ConnectCases\UpdateField\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $isMultiline
 */
class TextAttributes extends Shape
{
    /**
     * @param array{isMultiline: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
