<?php

namespace Sunaoka\Aws\Structures\Comprehend\BatchDetectDominantLanguage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Index
 * @property list<DominantLanguage>|null $Languages
 */
class BatchDetectDominantLanguageItemResult extends Shape
{
    /**
     * @param array{
     *     Index?: int|null,
     *     Languages?: list<DominantLanguage>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
