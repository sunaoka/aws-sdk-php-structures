<?php

namespace Sunaoka\Aws\Structures\Omics\GetRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $engineLogStream
 * @property string $runLogStream
 */
class RunLogLocation extends Shape
{
    /**
     * @param array{
     *     engineLogStream?: string,
     *     runLogStream?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
