<?php

namespace Sunaoka\Aws\Structures\SavingsPlans\DescribeSavingsPlansOfferings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'region'|'instanceFamily'|null $name
 * @property string|null $value
 */
class SavingsPlanOfferingProperty extends Shape
{
    /**
     * @param array{
     *     name?: 'region'|'instanceFamily'|null,
     *     value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
