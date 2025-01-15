<?php

namespace Sunaoka\Aws\Structures\Comprehend\DetectToxicContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ToxicContent>|null $Labels
 * @property float|null $Toxicity
 */
class ToxicLabels extends Shape
{
    /**
     * @param array{
     *     Labels?: list<ToxicContent>|null,
     *     Toxicity?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
