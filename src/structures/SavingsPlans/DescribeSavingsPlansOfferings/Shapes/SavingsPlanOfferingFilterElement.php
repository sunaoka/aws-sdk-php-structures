<?php

namespace Sunaoka\Aws\Structures\SavingsPlans\DescribeSavingsPlansOfferings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'region'|'instanceFamily'|null $name
 * @property list<string>|null $values
 */
class SavingsPlanOfferingFilterElement extends Shape
{
    /**
     * @param array{
     *     name?: 'region'|'instanceFamily'|null,
     *     values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
