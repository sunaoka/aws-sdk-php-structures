<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\DescribeRecommendationExportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ResourceType'|'JobStatus' $name
 * @property list<string> $values
 */
class JobFilter extends Shape
{
    /**
     * @param array{
     *     name?: 'ResourceType'|'JobStatus',
     *     values?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
