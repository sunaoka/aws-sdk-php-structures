<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServiceRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RuntimePlatformOverride|null $runtimePlatform
 */
class ServiceRevisionOverrides extends Shape
{
    /**
     * @param array{runtimePlatform?: RuntimePlatformOverride|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
