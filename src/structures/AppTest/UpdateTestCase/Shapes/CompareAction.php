<?php

namespace Sunaoka\Aws\Structures\AppTest\UpdateTestCase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Input $input
 * @property Output $output
 */
class CompareAction extends Shape
{
    /**
     * @param array{
     *     input: Input,
     *     output?: Output
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
