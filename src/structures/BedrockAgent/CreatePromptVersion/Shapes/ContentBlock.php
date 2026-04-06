<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreatePromptVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $text
 * @property CachePointBlock|null $cachePoint
 */
class ContentBlock extends Shape
{
    /**
     * @param array{
     *     text?: string|null,
     *     cachePoint?: CachePointBlock|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
