<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServiceRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $cpuArchitecture
 */
class RuntimePlatformOverride extends Shape
{
    /**
     * @param array{cpuArchitecture?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
