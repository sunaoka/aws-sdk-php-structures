<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlowVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CachePointBlock|null $cachePoint
 * @property ToolSpecification|null $toolSpec
 */
class Tool extends Shape
{
    /**
     * @param array{
     *     cachePoint?: CachePointBlock|null,
     *     toolSpec?: ToolSpecification|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
