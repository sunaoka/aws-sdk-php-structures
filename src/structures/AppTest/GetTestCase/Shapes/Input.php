<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestCase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InputFile $file
 */
class Input extends Shape
{
    /**
     * @param array{file?: InputFile} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
