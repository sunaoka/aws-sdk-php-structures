<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ToolSpecification|null $toolSpec
 * @property CachePointBlock|null $cachePoint
 */
class Tool extends Shape
{
    /**
     * @param array{
     *     toolSpec?: ToolSpecification|null,
     *     cachePoint?: CachePointBlock|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
