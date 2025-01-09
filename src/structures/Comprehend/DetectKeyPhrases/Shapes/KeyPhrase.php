<?php

namespace Sunaoka\Aws\Structures\Comprehend\DetectKeyPhrases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $Score
 * @property string $Text
 * @property int $BeginOffset
 * @property int $EndOffset
 */
class KeyPhrase extends Shape
{
    /**
     * @param array{
     *     Score?: float,
     *     Text?: string,
     *     BeginOffset?: int,
     *     EndOffset?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
