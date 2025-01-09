<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DimensionField> $GroupBy
 * @property list<MeasureField> $Size
 */
class WordCloudAggregatedFieldWells extends Shape
{
    /**
     * @param array{
     *     GroupBy?: list<DimensionField>,
     *     Size?: list<MeasureField>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
