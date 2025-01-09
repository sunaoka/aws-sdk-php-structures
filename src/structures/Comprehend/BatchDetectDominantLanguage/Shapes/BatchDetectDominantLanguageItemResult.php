<?php

namespace Sunaoka\Aws\Structures\Comprehend\BatchDetectDominantLanguage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Index
 * @property list<DominantLanguage> $Languages
 */
class BatchDetectDominantLanguageItemResult extends Shape
{
    /**
     * @param array{
     *     Index?: int,
     *     Languages?: list<DominantLanguage>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
