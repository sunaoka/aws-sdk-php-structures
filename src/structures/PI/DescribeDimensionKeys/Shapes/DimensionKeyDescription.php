<?php

namespace Sunaoka\Aws\Structures\PI\DescribeDimensionKeys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $Dimensions
 * @property double|null $Total
 * @property array<string, double>|null $AdditionalMetrics
 * @property list<double>|null $Partitions
 */
class DimensionKeyDescription extends Shape
{
    /**
     * @param array{
     *     Dimensions?: array<string, string>|null,
     *     Total?: double|null,
     *     AdditionalMetrics?: array<string, double>|null,
     *     Partitions?: list<double>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
