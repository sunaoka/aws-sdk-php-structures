<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestSuite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Input $input
 * @property Output|null $output
 */
class CompareAction extends Shape
{
    /**
     * @param array{
     *     input: Input,
     *     output?: Output|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
