<?php

namespace Sunaoka\Aws\Structures\AppTest\CreateTestCase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OutputFile $file
 */
class Output extends Shape
{
    /**
     * @param array{file?: OutputFile} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
