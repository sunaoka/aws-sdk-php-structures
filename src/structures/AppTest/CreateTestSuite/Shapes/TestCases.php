<?php

namespace Sunaoka\Aws\Structures\AppTest\CreateTestSuite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $sequential
 */
class TestCases extends Shape
{
    /**
     * @param array{sequential?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
