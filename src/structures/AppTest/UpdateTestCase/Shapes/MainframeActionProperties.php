<?php

namespace Sunaoka\Aws\Structures\AppTest\UpdateTestCase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dmsTaskArn
 */
class MainframeActionProperties extends Shape
{
    /**
     * @param array{dmsTaskArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
