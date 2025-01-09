<?php

namespace Sunaoka\Aws\Structures\SavingsPlans\DescribeSavingsPlanRates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'region'|'instanceType'|'instanceFamily'|'productDescription'|'tenancy' $name
 * @property string $value
 */
class SavingsPlanRateProperty extends Shape
{
    /**
     * @param array{
     *     name?: 'region'|'instanceType'|'instanceFamily'|'productDescription'|'tenancy',
     *     value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
