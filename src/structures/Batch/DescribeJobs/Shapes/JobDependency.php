<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobId
 * @property 'N_TO_N'|'SEQUENTIAL' $type
 */
class JobDependency extends Shape
{
    /**
     * @param array{
     *     jobId?: string,
     *     type?: 'N_TO_N'|'SEQUENTIAL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
