<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\Retrieve\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'png'|'jpeg'|'gif'|'webp' $format
 * @property string|resource|\Psr\Http\Message\StreamInterface $inlineContent
 */
class InputImage extends Shape
{
    /**
     * @param array{
     *     format: 'png'|'jpeg'|'gif'|'webp',
     *     inlineContent: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
