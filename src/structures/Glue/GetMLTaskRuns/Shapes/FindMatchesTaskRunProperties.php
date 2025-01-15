<?php

namespace Sunaoka\Aws\Structures\Glue\GetMLTaskRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $JobId
 * @property string|null $JobName
 * @property string|null $JobRunId
 */
class FindMatchesTaskRunProperties extends Shape
{
    /**
     * @param array{
     *     JobId?: string|null,
     *     JobName?: string|null,
     *     JobRunId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
