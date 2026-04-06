<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchCreateBillScenarioUsageModification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $key
 * @property list<string>|null $matchOptions
 * @property list<string>|null $values
 */
class ExpressionFilter extends Shape
{
    /**
     * @param array{
     *     key?: string|null,
     *     matchOptions?: list<string>|null,
     *     values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
