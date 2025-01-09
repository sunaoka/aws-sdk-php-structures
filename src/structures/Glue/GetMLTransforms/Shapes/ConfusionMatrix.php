<?php

namespace Sunaoka\Aws\Structures\Glue\GetMLTransforms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $NumTruePositives
 * @property int $NumFalsePositives
 * @property int $NumTrueNegatives
 * @property int $NumFalseNegatives
 */
class ConfusionMatrix extends Shape
{
    /**
     * @param array{
     *     NumTruePositives?: int,
     *     NumFalsePositives?: int,
     *     NumTrueNegatives?: int,
     *     NumFalseNegatives?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
