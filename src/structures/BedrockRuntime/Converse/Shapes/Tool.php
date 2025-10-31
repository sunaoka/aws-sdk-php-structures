<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\Converse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ToolSpecification|null $toolSpec
 * @property SystemTool|null $systemTool
 * @property CachePointBlock|null $cachePoint
 */
class Tool extends Shape
{
    /**
     * @param array{
     *     toolSpec?: ToolSpecification|null,
     *     systemTool?: SystemTool|null,
     *     cachePoint?: CachePointBlock|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
