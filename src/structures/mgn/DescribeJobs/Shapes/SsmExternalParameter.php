<?php

namespace Sunaoka\Aws\Structures\mgn\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dynamicPath
 */
class SsmExternalParameter extends Shape
{
    /**
     * @param array{dynamicPath?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
