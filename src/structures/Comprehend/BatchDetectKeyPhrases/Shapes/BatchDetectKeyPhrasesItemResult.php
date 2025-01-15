<?php

namespace Sunaoka\Aws\Structures\Comprehend\BatchDetectKeyPhrases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Index
 * @property list<KeyPhrase>|null $KeyPhrases
 */
class BatchDetectKeyPhrasesItemResult extends Shape
{
    /**
     * @param array{
     *     Index?: int|null,
     *     KeyPhrases?: list<KeyPhrase>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
