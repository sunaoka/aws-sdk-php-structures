<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestCase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Script $script
 * @property list<string>|null $exportDataSetNames
 */
class TN3270 extends Shape
{
    /**
     * @param array{
     *     script: Script,
     *     exportDataSetNames?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
