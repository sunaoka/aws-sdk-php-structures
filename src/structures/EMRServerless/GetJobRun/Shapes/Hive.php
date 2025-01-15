<?php

namespace Sunaoka\Aws\Structures\EMRServerless\GetJobRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $query
 * @property string|null $initQueryFile
 * @property string|null $parameters
 */
class Hive extends Shape
{
    /**
     * @param array{
     *     query: string,
     *     initQueryFile?: string|null,
     *     parameters?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
