<?php

namespace Sunaoka\Aws\Structures\SavingsPlans\DescribeSavingsPlanRates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'region'|'instanceType'|'instanceFamily'|'productDescription'|'tenancy'|null $name
 * @property string|null $value
 */
class SavingsPlanRateProperty extends Shape
{
    /**
     * @param array{
     *     name?: 'region'|'instanceType'|'instanceFamily'|'productDescription'|'tenancy'|null,
     *     value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
