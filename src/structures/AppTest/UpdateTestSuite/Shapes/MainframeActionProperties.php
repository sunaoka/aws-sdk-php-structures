<?php

namespace Sunaoka\Aws\Structures\AppTest\UpdateTestSuite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $dmsTaskArn
 */
class MainframeActionProperties extends Shape
{
    /**
     * @param array{dmsTaskArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
