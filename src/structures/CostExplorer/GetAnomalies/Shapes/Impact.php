<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetAnomalies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $MaxImpact
 * @property double $TotalImpact
 * @property double $TotalActualSpend
 * @property double $TotalExpectedSpend
 * @property double $TotalImpactPercentage
 */
class Impact extends Shape
{
    /**
     * @param array{
     *     MaxImpact: double,
     *     TotalImpact?: double,
     *     TotalActualSpend?: double,
     *     TotalExpectedSpend?: double,
     *     TotalImpactPercentage?: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
