<?php

namespace Sunaoka\Aws\Structures\Glue\GetMLTransform\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PrimaryKeyColumnName
 * @property double|null $PrecisionRecallTradeoff
 * @property double|null $AccuracyCostTradeoff
 * @property bool|null $EnforceProvidedLabels
 */
class FindMatchesParameters extends Shape
{
    /**
     * @param array{
     *     PrimaryKeyColumnName?: string|null,
     *     PrecisionRecallTradeoff?: double|null,
     *     AccuracyCostTradeoff?: double|null,
     *     EnforceProvidedLabels?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
