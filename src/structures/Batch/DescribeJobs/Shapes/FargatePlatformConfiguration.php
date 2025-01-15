<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $platformVersion
 */
class FargatePlatformConfiguration extends Shape
{
    /**
     * @param array{platformVersion?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
