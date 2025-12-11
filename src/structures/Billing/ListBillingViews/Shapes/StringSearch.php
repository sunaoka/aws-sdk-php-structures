<?php

namespace Sunaoka\Aws\Structures\Billing\ListBillingViews\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STARTS_WITH' $searchOption
 * @property string $searchValue
 */
class StringSearch extends Shape
{
    /**
     * @param array{
     *     searchOption: 'STARTS_WITH',
     *     searchValue: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
