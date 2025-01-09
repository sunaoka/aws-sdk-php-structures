<?php

namespace Sunaoka\Aws\Structures\Glue\GetMLTaskRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JobId
 * @property string $JobName
 * @property string $JobRunId
 */
class FindMatchesTaskRunProperties extends Shape
{
    /**
     * @param array{
     *     JobId?: string,
     *     JobName?: string,
     *     JobRunId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
