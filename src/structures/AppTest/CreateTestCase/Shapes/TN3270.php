<?php

namespace Sunaoka\Aws\Structures\AppTest\CreateTestCase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Script $script
 * @property list<string> $exportDataSetNames
 */
class TN3270 extends Shape
{
    /**
     * @param array{
     *     script: Script,
     *     exportDataSetNames?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
