<?php

namespace Sunaoka\Aws\Structures\SavingsPlans\DescribeSavingsPlansOfferings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'region'|'instanceFamily' $name
 * @property list<string> $values
 */
class SavingsPlanOfferingFilterElement extends Shape
{
    /**
     * @param array{
     *     name?: 'region'|'instanceFamily',
     *     values?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
