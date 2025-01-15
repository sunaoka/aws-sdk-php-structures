<?php

namespace Sunaoka\Aws\Structures\SavingsPlans\DescribeSavingsPlanRates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'region'|'instanceType'|'productDescription'|'tenancy'|'productType'|'serviceCode'|'usageType'|'operation'|null $name
 * @property list<string>|null $values
 */
class SavingsPlanRateFilter extends Shape
{
    /**
     * @param array{
     *     name?: 'region'|'instanceType'|'productDescription'|'tenancy'|'productType'|'serviceCode'|'usageType'|'operation'|null,
     *     values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
