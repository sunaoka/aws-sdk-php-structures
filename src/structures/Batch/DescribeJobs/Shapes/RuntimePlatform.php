<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $operatingSystemFamily
 * @property string|null $cpuArchitecture
 */
class RuntimePlatform extends Shape
{
    /**
     * @param array{
     *     operatingSystemFamily?: string|null,
     *     cpuArchitecture?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
