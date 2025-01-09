<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestCase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fileLocation
 */
class OutputFile extends Shape
{
    /**
     * @param array{fileLocation?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
