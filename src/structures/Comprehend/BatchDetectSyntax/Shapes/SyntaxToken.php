<?php

namespace Sunaoka\Aws\Structures\Comprehend\BatchDetectSyntax\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $TokenId
 * @property string|null $Text
 * @property int|null $BeginOffset
 * @property int|null $EndOffset
 * @property PartOfSpeechTag|null $PartOfSpeech
 */
class SyntaxToken extends Shape
{
    /**
     * @param array{
     *     TokenId?: int|null,
     *     Text?: string|null,
     *     BeginOffset?: int|null,
     *     EndOffset?: int|null,
     *     PartOfSpeech?: PartOfSpeechTag|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
