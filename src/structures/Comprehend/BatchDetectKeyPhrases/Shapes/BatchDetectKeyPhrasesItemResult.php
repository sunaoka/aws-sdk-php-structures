<?php

namespace Sunaoka\Aws\Structures\Comprehend\BatchDetectKeyPhrases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Index
 * @property list<KeyPhrase> $KeyPhrases
 */
class BatchDetectKeyPhrasesItemResult extends Shape
{
    /**
     * @param array{
     *     Index?: int,
     *     KeyPhrases?: list<KeyPhrase>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
