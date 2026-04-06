<?php

namespace Sunaoka\Aws\Structures\AppTest\CreateTestSuite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OutputFile|null $file
 */
class Output extends Shape
{
    /**
     * @param array{file?: OutputFile|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
