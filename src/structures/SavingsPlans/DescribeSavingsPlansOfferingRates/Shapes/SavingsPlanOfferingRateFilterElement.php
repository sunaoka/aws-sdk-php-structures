<?php

namespace Sunaoka\Aws\Structures\SavingsPlans\DescribeSavingsPlansOfferingRates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'region'|'instanceFamily'|'instanceType'|'productDescription'|'tenancy'|'productId' $name
 * @property list<string> $values
 */
class SavingsPlanOfferingRateFilterElement extends Shape
{
    /**
     * @param array{
     *     name?: 'region'|'instanceFamily'|'instanceType'|'productDescription'|'tenancy'|'productId',
     *     values?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
