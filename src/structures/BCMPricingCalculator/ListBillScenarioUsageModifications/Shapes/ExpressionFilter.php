<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillScenarioUsageModifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property list<string> $matchOptions
 * @property list<string> $values
 */
class ExpressionFilter extends Shape
{
    /**
     * @param array{
     *     key?: string,
     *     matchOptions?: list<string>,
     *     values?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
