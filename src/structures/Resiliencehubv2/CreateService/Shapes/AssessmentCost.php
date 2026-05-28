<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\CreateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $amount
 * @property 'USD'|null $currency
 */
class AssessmentCost extends Shape
{
    /**
     * @param array{
     *     amount?: double|null,
     *     currency?: 'USD'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
