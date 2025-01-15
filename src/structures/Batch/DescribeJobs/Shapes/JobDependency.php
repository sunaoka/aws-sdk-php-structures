<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $jobId
 * @property 'N_TO_N'|'SEQUENTIAL'|null $type
 */
class JobDependency extends Shape
{
    /**
     * @param array{
     *     jobId?: string|null,
     *     type?: 'N_TO_N'|'SEQUENTIAL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
