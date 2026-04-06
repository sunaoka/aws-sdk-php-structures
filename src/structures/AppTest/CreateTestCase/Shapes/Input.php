<?php

namespace Sunaoka\Aws\Structures\AppTest\CreateTestCase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InputFile|null $file
 */
class Input extends Shape
{
    /**
     * @param array{file?: InputFile|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
