<?php

namespace Sunaoka\Aws\Structures\PI\DescribeDimensionKeys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $Dimensions
 * @property double $Total
 * @property array<string, double> $AdditionalMetrics
 * @property list<double> $Partitions
 */
class DimensionKeyDescription extends Shape
{
    /**
     * @param array{
     *     Dimensions?: array<string, string>,
     *     Total?: double,
     *     AdditionalMetrics?: array<string, double>,
     *     Partitions?: list<double>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
