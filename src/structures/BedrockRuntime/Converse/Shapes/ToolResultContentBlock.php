<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\Converse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Document|null $json
 * @property string|null $text
 * @property ImageBlock|null $image
 * @property DocumentBlock|null $document
 * @property VideoBlock|null $video
 */
class ToolResultContentBlock extends Shape
{
    /**
     * @param array{
     *     json?: Document|null,
     *     text?: string|null,
     *     image?: ImageBlock|null,
     *     document?: DocumentBlock|null,
     *     video?: VideoBlock|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
