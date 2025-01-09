<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $labels
 * @property array<string, string> $annotations
 * @property string $namespace
 */
class EksMetadata extends Shape
{
    /**
     * @param array{
     *     labels?: array<string, string>,
     *     annotations?: array<string, string>,
     *     namespace?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
