<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetAnomalies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $MaxImpact
 * @property double|null $TotalImpact
 * @property double|null $TotalActualSpend
 * @property double|null $TotalExpectedSpend
 * @property double|null $TotalImpactPercentage
 */
class Impact extends Shape
{
    /**
     * @param array{
     *     MaxImpact: double,
     *     TotalImpact?: double|null,
     *     TotalActualSpend?: double|null,
     *     TotalExpectedSpend?: double|null,
     *     TotalImpactPercentage?: double|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
