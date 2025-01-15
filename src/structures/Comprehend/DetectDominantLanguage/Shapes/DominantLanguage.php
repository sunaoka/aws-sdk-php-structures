<?php

namespace Sunaoka\Aws\Structures\Comprehend\DetectDominantLanguage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LanguageCode
 * @property float|null $Score
 */
class DominantLanguage extends Shape
{
    /**
     * @param array{
     *     LanguageCode?: string|null,
     *     Score?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
