<?php

namespace Sunaoka\Aws\Structures\SavingsPlans\DescribeSavingsPlanRates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'region'|'instanceType'|'productDescription'|'tenancy'|'productType'|'serviceCode'|'usageType'|'operation' $name
 * @property list<string> $values
 */
class SavingsPlanRateFilter extends Shape
{
    /**
     * @param array{
     *     name?: 'region'|'instanceType'|'productDescription'|'tenancy'|'productType'|'serviceCode'|'usageType'|'operation',
     *     values?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
