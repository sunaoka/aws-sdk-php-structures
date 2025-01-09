<?php

namespace Sunaoka\Aws\Structures\Glue\GetMLTransform\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PrimaryKeyColumnName
 * @property double $PrecisionRecallTradeoff
 * @property double $AccuracyCostTradeoff
 * @property bool $EnforceProvidedLabels
 */
class FindMatchesParameters extends Shape
{
    /**
     * @param array{
     *     PrimaryKeyColumnName?: string,
     *     PrecisionRecallTradeoff?: double,
     *     AccuracyCostTradeoff?: double,
     *     EnforceProvidedLabels?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
