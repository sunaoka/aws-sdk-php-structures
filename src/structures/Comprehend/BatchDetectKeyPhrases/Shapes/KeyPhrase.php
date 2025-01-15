<?php

namespace Sunaoka\Aws\Structures\Comprehend\BatchDetectKeyPhrases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $Score
 * @property string|null $Text
 * @property int|null $BeginOffset
 * @property int|null $EndOffset
 */
class KeyPhrase extends Shape
{
    /**
     * @param array{
     *     Score?: float|null,
     *     Text?: string|null,
     *     BeginOffset?: int|null,
     *     EndOffset?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
