<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $text
 * @property ImageBlock $image
 * @property DocumentBlock $document
 * @property VideoBlock $video
 * @property ToolUseBlock $toolUse
 * @property ToolResultBlock $toolResult
 * @property GuardrailConverseContentBlock $guardContent
 */
class ContentBlock extends Shape
{
    /**
     * @param array{
     *     text?: string,
     *     image?: ImageBlock,
     *     document?: DocumentBlock,
     *     video?: VideoBlock,
     *     toolUse?: ToolUseBlock,
     *     toolResult?: ToolResultBlock,
     *     guardContent?: GuardrailConverseContentBlock
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
