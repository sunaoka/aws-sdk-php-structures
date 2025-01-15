<?php

namespace Sunaoka\Aws\Structures\Omics\GetRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $engineLogStream
 * @property string|null $runLogStream
 */
class RunLogLocation extends Shape
{
    /**
     * @param array{
     *     engineLogStream?: string|null,
     *     runLogStream?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
