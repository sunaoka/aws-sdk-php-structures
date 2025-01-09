<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\Converse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'png'|'jpeg'|'gif'|'webp' $format
 * @property ImageSource $source
 */
class ImageBlock extends Shape
{
    /**
     * @param array{
     *     format: 'png'|'jpeg'|'gif'|'webp',
     *     source: ImageSource
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
