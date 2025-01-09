<?php

namespace Sunaoka\Aws\Structures\SavingsPlans\DescribeSavingsPlansOfferings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'region'|'instanceFamily' $name
 * @property string $value
 */
class SavingsPlanOfferingProperty extends Shape
{
    /**
     * @param array{
     *     name?: 'region'|'instanceFamily',
     *     value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
