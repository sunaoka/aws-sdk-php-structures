<?php

namespace Sunaoka\Aws\Structures\Glue\GetMLTransforms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $AreaUnderPRCurve
 * @property double|null $Precision
 * @property double|null $Recall
 * @property double|null $F1
 * @property ConfusionMatrix|null $ConfusionMatrix
 * @property list<ColumnImportance>|null $ColumnImportances
 */
class FindMatchesMetrics extends Shape
{
    /**
     * @param array{
     *     AreaUnderPRCurve?: double|null,
     *     Precision?: double|null,
     *     Recall?: double|null,
     *     F1?: double|null,
     *     ConfusionMatrix?: ConfusionMatrix|null,
     *     ColumnImportances?: list<ColumnImportance>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
