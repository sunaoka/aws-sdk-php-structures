<?php

namespace Sunaoka\Aws\Structures\Comprehend\DetectToxicContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ToxicContent> $Labels
 * @property float $Toxicity
 */
class ToxicLabels extends Shape
{
    /**
     * @param array{
     *     Labels?: list<ToxicContent>,
     *     Toxicity?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
