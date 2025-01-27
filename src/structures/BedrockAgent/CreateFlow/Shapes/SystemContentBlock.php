<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CachePointBlock|null $cachePoint
 * @property string|null $text
 */
class SystemContentBlock extends Shape
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
