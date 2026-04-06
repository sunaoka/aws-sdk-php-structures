<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'png'|'jpeg'|'gif'|'webp' $format
 * @property ImageSource $source
 * @property ErrorBlock|null $error
 */
class ImageBlock extends Shape
{
    /**
     * @param array{
     *     format: 'png'|'jpeg'|'gif'|'webp',
     *     source: ImageSource,
     *     error?: ErrorBlock|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
