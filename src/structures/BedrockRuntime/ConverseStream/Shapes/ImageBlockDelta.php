<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImageSource|null $source
 * @property ErrorBlock|null $error
 */
class ImageBlockDelta extends Shape
{
    /**
     * @param array{
     *     source?: ImageSource|null,
     *     error?: ErrorBlock|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
