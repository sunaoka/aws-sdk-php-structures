<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'png'|'jpeg'|'gif'|'webp' $format
 * @property ImageInputSource $source
 */
class ImageInput extends Shape
{
    /**
     * @param array{
     *     format: 'png'|'jpeg'|'gif'|'webp',
     *     source: ImageInputSource
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
