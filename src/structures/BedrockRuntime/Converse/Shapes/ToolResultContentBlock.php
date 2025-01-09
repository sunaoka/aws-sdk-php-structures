<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\Converse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Document $json
 * @property string $text
 * @property ImageBlock $image
 * @property DocumentBlock $document
 * @property VideoBlock $video
 */
class ToolResultContentBlock extends Shape
{
    /**
     * @param array{
     *     json?: Document,
     *     text?: string,
     *     image?: ImageBlock,
     *     document?: DocumentBlock,
     *     video?: VideoBlock
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
