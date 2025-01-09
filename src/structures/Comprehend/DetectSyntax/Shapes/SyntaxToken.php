<?php

namespace Sunaoka\Aws\Structures\Comprehend\DetectSyntax\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $TokenId
 * @property string $Text
 * @property int $BeginOffset
 * @property int $EndOffset
 * @property PartOfSpeechTag $PartOfSpeech
 */
class SyntaxToken extends Shape
{
    /**
     * @param array{
     *     TokenId?: int,
     *     Text?: string,
     *     BeginOffset?: int,
     *     EndOffset?: int,
     *     PartOfSpeech?: PartOfSpeechTag
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
