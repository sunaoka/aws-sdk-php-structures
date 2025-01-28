<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlowVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CachePointBlock|null $cachePoint
 * @property string|null $text
 */
class ContentBlock extends Shape
{
    /**
     * @param array{
     *     cachePoint?: CachePointBlock|null,
     *     text?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
