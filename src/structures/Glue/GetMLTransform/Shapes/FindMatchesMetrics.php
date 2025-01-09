<?php

namespace Sunaoka\Aws\Structures\Glue\GetMLTransform\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $AreaUnderPRCurve
 * @property double $Precision
 * @property double $Recall
 * @property double $F1
 * @property ConfusionMatrix $ConfusionMatrix
 * @property list<ColumnImportance> $ColumnImportances
 */
class FindMatchesMetrics extends Shape
{
    /**
     * @param array{
     *     AreaUnderPRCurve?: double,
     *     Precision?: double,
     *     Recall?: double,
     *     F1?: double,
     *     ConfusionMatrix?: ConfusionMatrix,
     *     ColumnImportances?: list<ColumnImportance>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
