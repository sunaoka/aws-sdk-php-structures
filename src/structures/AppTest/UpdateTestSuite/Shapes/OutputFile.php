<?php

namespace Sunaoka\Aws\Structures\AppTest\UpdateTestSuite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $fileLocation
 */
class OutputFile extends Shape
{
    /**
     * @param array{fileLocation?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
