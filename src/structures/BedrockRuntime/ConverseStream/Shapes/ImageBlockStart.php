<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'png'|'jpeg'|'gif'|'webp' $format
 */
class ImageBlockStart extends Shape
{
    /**
     * @param array{format: 'png'|'jpeg'|'gif'|'webp'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
