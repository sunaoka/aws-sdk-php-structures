<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $operatingSystemFamily
 * @property string $cpuArchitecture
 */
class RuntimePlatform extends Shape
{
    /**
     * @param array{
     *     operatingSystemFamily?: string,
     *     cpuArchitecture?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
