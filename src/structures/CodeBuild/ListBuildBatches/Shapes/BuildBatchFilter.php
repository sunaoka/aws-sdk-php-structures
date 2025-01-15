<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListBuildBatches\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUCCEEDED'|'FAILED'|'FAULT'|'TIMED_OUT'|'IN_PROGRESS'|'STOPPED'|null $status
 */
class BuildBatchFilter extends Shape
{
    /**
     * @param array{status?: 'SUCCEEDED'|'FAILED'|'FAULT'|'TIMED_OUT'|'IN_PROGRESS'|'STOPPED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
