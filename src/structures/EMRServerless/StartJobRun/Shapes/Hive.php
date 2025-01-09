<?php

namespace Sunaoka\Aws\Structures\EMRServerless\StartJobRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $query
 * @property string $initQueryFile
 * @property string $parameters
 */
class Hive extends Shape
{
    /**
     * @param array{
     *     query: string,
     *     initQueryFile?: string,
     *     parameters?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
