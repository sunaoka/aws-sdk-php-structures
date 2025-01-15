<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\DescribeRecommendationExportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ResourceType'|'JobStatus'|null $name
 * @property list<string>|null $values
 */
class JobFilter extends Shape
{
    /**
     * @param array{
     *     name?: 'ResourceType'|'JobStatus'|null,
     *     values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
