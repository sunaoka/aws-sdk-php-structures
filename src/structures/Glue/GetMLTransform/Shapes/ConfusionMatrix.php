<?php

namespace Sunaoka\Aws\Structures\Glue\GetMLTransform\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $NumTruePositives
 * @property int|null $NumFalsePositives
 * @property int|null $NumTrueNegatives
 * @property int|null $NumFalseNegatives
 */
class ConfusionMatrix extends Shape
{
    /**
     * @param array{
     *     NumTruePositives?: int|null,
     *     NumFalsePositives?: int|null,
     *     NumTrueNegatives?: int|null,
     *     NumFalseNegatives?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
