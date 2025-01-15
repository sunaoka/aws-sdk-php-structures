<?php

namespace Sunaoka\Aws\Structures\SavingsPlans\DescribeSavingsPlansOfferingRates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'region'|'instanceFamily'|'instanceType'|'productDescription'|'tenancy'|'productId'|null $name
 * @property list<string>|null $values
 */
class SavingsPlanOfferingRateFilterElement extends Shape
{
    /**
     * @param array{
     *     name?: 'region'|'instanceFamily'|'instanceType'|'productDescription'|'tenancy'|'productId'|null,
     *     values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
