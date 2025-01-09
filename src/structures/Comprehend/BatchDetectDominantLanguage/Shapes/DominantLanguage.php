<?php

namespace Sunaoka\Aws\Structures\Comprehend\BatchDetectDominantLanguage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LanguageCode
 * @property float $Score
 */
class DominantLanguage extends Shape
{
    /**
     * @param array{
     *     LanguageCode?: string,
     *     Score?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
