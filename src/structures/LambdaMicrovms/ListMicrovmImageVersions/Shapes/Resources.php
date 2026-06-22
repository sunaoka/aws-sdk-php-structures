<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\ListMicrovmImageVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $minimumMemoryInMiB
 */
class Resources extends Shape
{
    /**
     * @param array{minimumMemoryInMiB: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
