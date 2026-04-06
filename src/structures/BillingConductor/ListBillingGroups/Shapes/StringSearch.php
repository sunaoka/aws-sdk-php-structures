<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListBillingGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STARTS_WITH' $SearchOption
 * @property string $SearchValue
 */
class StringSearch extends Shape
{
    /**
     * @param array{
     *     SearchOption: 'STARTS_WITH',
     *     SearchValue: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
