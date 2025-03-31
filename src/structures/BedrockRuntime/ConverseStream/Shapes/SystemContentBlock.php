<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $text
 * @property GuardrailConverseContentBlock|null $guardContent
 * @property CachePointBlock|null $cachePoint
 */
class SystemContentBlock extends Shape
{
    /**
     * @param array{
     *     text?: string|null,
     *     guardContent?: GuardrailConverseContentBlock|null,
     *     cachePoint?: CachePointBlock|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
